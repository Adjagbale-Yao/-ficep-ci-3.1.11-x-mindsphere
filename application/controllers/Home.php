<?php
defined('BASEPATH') or exit('No direct script access allowed');

use application\models\Machine_model;

class Home extends CI_Controller
{
    public function index()
    {
        // if ($this->db->simple_query('YOUR QUERY')) {
        //     echo "Success!";
        // } else {
        //     echo "Query failed!";
        // }
        #$this->load->view('welcome_message');
        $this->home();
    }
    public function __construct()
    {
        parent::__construct();
        $this->load->database();
        
        #$this->load->library(['ion_auth', 'form_validation']);
        #$this->load->helper(['url', 'language']);
#
        #$this->form_validation->set_error_delimiters($this->config->item('error_start_delimiter', 'ion_auth'), $this->config->item('error_end_delimiter', 'ion_auth'));
#
        #$this->lang->load('auth');
    }#
    public function home()
    {
        $this->load->model('Machine_model', '', TRUE);
        //moved session and pager initiation to BaseController
        $message = $this->session->message;
        $data['machines'] = $this->Machine_model->getAll();
        $data['message'] = $message;
        $data['customers'] = $this->Machine_model->getBySelector('customer');
        $data['plants'] = $this->Machine_model->getBySelector('plant');
        $data['models'] = $this->Machine_model->getBySelector('model');
        $data['technologies'] = $this->Machine_model->getBySelector('technology');
        return $this->load->view('ficep_home', $data);
    }
    public function gridView()
    {
        // 
        $this->load->model('Machine_model', '', TRUE);
        if (($val = strtoupper($this->input->get('searchVal'))) != null) {
            $data['machines'] = $this->Machine_model->getNameLike($val);
            $data['customers'] = $this->Machine_model->getBySelector('customer');
            $data['plants'] = $this->Machine_model->getBySelector('plant');
            $data['models'] = $this->Machine_model->getBySelector('model');
            $data['technologies'] = $this->Machine_model->getBySelector('technology');
            var_dump($data['machines']);
            return $this->load->view('ficep_gridview', $data);
        } else {
            // $data = [
            //     'base_url' =>'//grid-view/',
            //     'title' => 'Machines',
            //     'total_rows' => 1,
            //     'per_page' => 2,
            //     'records' => $this->db->get('ficep_machines', 2, $this->uri->segment(1))
            // ];
            // $this->pagination->initialize($data);
            $data['machines'] = $this->Machine_model->getAll();
            $data['customers'] = $this->Machine_model->getBySelector('customer');
            $data['plants'] = $this->Machine_model->getBySelector('plant');
            $data['models'] = $this->Machine_model->getBySelector('model');
            $data['technologies'] = $this->Machine_model->getBySelector('technology');
            return $this->load->view('ficep_gridview', $data);
        }
    }

    function alarms()
    {
        // if (!$input) {
        //     print_r('Choose a valid file');
        // } else {
        //     $img = $this->request->getFile('file');
        //     $img->move(WRITEPATH . 'uploads');

        //     $data = [
        //        'name' =>  $img->getName(),
        //        'type'  => $img->getClientMimeType()
        //     ];

        //     $save = $db->insert($data);
        //     print_r('File has successfully uploaded');        
        // }
        return $this->load->view('ficep_alarms');
    }
    function axysMonitoring()
    {
        return $this->load->view('ficep_axysmonitoring');
    }
    function parameters()
    {
        return $this->load->view('ficep_parameters');
    }
    function breakdownsListView()
    {
        return $this->load->view('ficep_breakdowns_listview');
    }
    function maintenanceListView()
    {
        return $this->load->view('ficep_maintenance_listview');
    }

    function machinemonitoring($machine_name)
    {
        $currentRecipe = "";
        $lastMaintenance = [];
        $res = "";
        if (false) {  //check the calling action     $machine_name != 'default'        
            // $maint = new MaintenanceModel();
            // $strain = new StrainControlModel();
            // $strokes = new StrokeSetsModel();
            // $types = new TypeModel();
            $this->load->model('Machine_model', '', TRUE);
            $this->load->model('Maintenance_model', '', TRUE);
            $this->load->model('Straincontrol_model', '', TRUE);
            $this->load->model('Strokesets_model', '', TRUE);
            $this->load->model('Type_model', '', TRUE);
            $press = $this->Type_model->where('Name', 'Press')->first();
            $screw = $this->Type_model->where('Name', 'Screw')->first();
            $nut = $this->Type_model->where('Name', 'Nut')->first();
            //retrieves the machine we are working with
            $data['machine'] = $this->Machine_model->where('name', $machine_name)->first();
            $machine_id = $data['machine']['machine_id'];
            //retrieve the maintenance data
            $data['maintenance'] = $this->Maintenance_model->where('machine', $machine_id)->orderBy('end', 'disc')->first();
            if ($data['maintenance'] == null) { //if no maintenance data show this
                $data['maintenance']['end'] = "--:--";
                $data['maintenance']['message'] = "No maintenance information.";
            }
            //retrieve the strain data
            $data['strain'] = $this->Straincontrol_model->where('machine', $machine_id)->first();
            if ($data['strain'] == null) { //if no strain data show this
                $data['strain']['value'] = "------";
                $data['strain']['maximum'] = "------";
                $data['strain']['first_threshold_out'] = "------";
                $data['strain']['second_threshold_out'] = "------";
            }
            //retrieve number of stroke sets for machine_ID
            $data['strokesNumber'] = count($this->Strokesets_model->where('machine', $machine_id)->findAll());
            //retrieve number of strokes for machine_ID and type of stroke
            $data['pressStrokes'] = count($this->Strokesets_model->where(['machine' => $machine_id, 'type' => $press['id']])->findAll());
            $data['screwStrokes'] = count($this->Strokesets_model->where(['machine' => $machine_id, 'type' => $screw['id']])->findAll());
            $data['nutStrokes'] = count($this->Strokesets_model->where(['machine' => $machine_id, 'type' => $nut['id']])->findAll());
        } else { // default
            $this->load->model('Machine_model', '', TRUE);
            $this->load->model('Maintenance_model', '', TRUE);
            $this->load->model('Straincontrol_model', '', TRUE);
            $this->load->model('Strokesets_model', '', TRUE);
            $this->load->model('Type_model', '', TRUE);
            $data['machine'] = $this->Machine_model->first();
            $data['maintenance'] = $this->Maintenance_model->getLatest();
            $data['strain'] = $this->Straincontrol_model->get();
            $data['strokesNumber'] = "-";
            $data['pressStrokes'] = "-";
            $data['screwStrokes'] = "-";
            $data['nutStrokes'] = "-";
        }
        return $this->load->view('ficep_machinemonitoring', [
            'date' => $data['maintenance']['end'],
            'message' => $data['maintenance']['message'], 'machine' => $data['machine'],
            'strain' => $data['strain'],
            'strokesNumber' => $data['strokesNumber'],
            'pressStrokes' => $data['pressStrokes'],
            'screwStrokes' => $data['screwStrokes'],
            'nutStrokes' => $data['nutStrokes']

        ]);
    }


    function oee()
    {
        return $this->load->view('ficep_oee');
    }

    function kpi_processLog()
    {
        return $this->load->view('ficep_kpi_process_log');
    }

    function kpi_analytics()
    {
        return $this->load->view('ficep_kpi_analytics');
    }

    function breakdowns_kpi()
    {
        return $this->load->view('ficep_breakdowns_kpi');
    }

    function maintenance_kpi()
    {
        return $this->load->view('ficep_maintenance_kpi');
    }

    function electrical()
    {
        return $this->load->view('ficep_electrical');
    }

    function water()
    {
        return $this->load->view('ficep_water');
    }
    function subscription()
    {
        return $this->load->view('ficep_subscription');
    }

    function data_mapping()
    {
        $message = $this->session->message;
        $this->load->model('Machine_model');
        $data['message'] = $message;
        $data['names'] = $this->Machine_model->getNames();
        return $this->load->view('ficep_data_mapping', $data);
    }

    function maps()
    {
        //moved session and pager initiation to BaseController
        $message = $this->session->message;
        $this->load->model('Machine_model');
        $data['machines'] = $this->Machine_model->getAll();
        $data['message'] = $message;
        $data['customers'] = $this->Machine_model->getBySelector('customer');
        $data['plants'] = $this->Machine_model->getBySelector('plant');
        $data['models'] = $this->Machine_model->getBySelector('model');
        $data['technologies'] = $this->Machine_model->getBySelector('technology');
        return $this->load->view('ficep_mapview', $data);
    }
    function upload()
    {
        $writepath = './public/assets/data/';
        //helper(['form']);
        $data = [];
        $newName = "alarmsUpload.csv"; //This is if you want to change the file name to encrypted name

        if (isset($_FILES['csvFile'])) { //arrive after POST/FILES

            $rules = [
                'csvFile' => [
                    'rules' => 'uploaded[csvFile]|ext_in[csvFile,csv]',
                    'label' => 'This'
                ]
            ];
            // if ($this->validate($rules)) { // check if file matches the rules
            //     $file = $this->request->getFile("csvFile");
            //     //check if file already exist or not
            //     if ($file->isValid() && !file_exists($writepath . 'uploads/' . $newName)) {
            //         $file->move($writepath . 'uploads', $newName);
            //         $fp = file_get_contents($writepath . 'uploads/' . $newName);
            //         $tmp = str_getcsv($fp);
            //         $data['rows'] = $tmp;
            //     } else { // if yes, delete previous one and create new
            //         unlink($writepath . 'uploads/' . $newName);
            //         $file->move($writepath . 'uploads', $newName);
            //         $fp = file_get_contents($writepath . 'uploads/' . $newName);
            //         $tmp = str_getcsv($fp);
            //         $data['rows'] = $tmp;
            //     }
            // } else { // if it doesn't match the rules
            //     if (file_exists($writepath . 'uploads/' . $newName)) {
            //         $fp = file_get_contents($writepath . 'uploads/' . $newName);
            //         $tmp = str_getcsv($fp);
            //         $data['rows'] = $tmp;
            //     }
            //     $data['validation'] = $this->validator;
            // }
            $config['upload_path'] = $writepath . 'uploads/';
            $config['allowed_types'] = 'csv';

            $this->load->library('upload', $config);
            $this->upload->inistialize($config);
            $this->upload->do_upload('csvFile');
            return $this->load->view('ficep_upload', $data);
        } else { //arrive after GET

            if (file_exists($writepath . 'uploads/' . $newName)) {
                $fp = file_get_contents($writepath . 'uploads/' . $newName);
                $tmp = str_getcsv($fp);
                $data['rows'] = $tmp;
            }
            return $this->load->view('ficep_upload', $data);
        }
    }
}