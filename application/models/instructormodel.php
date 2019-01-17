<?php
defined('BASEPATH') OR exit('No direct script access allowed');
	/**
	* 
	*/
	class InstructorModel extends MY_Model{

        public function get_instructor(){

            $dtrps = $this->load->database('dtrps', true);

            $dtrps->select('*')
                ->from('employees')
                ->join('employment', 'employment.employee_id = employees.employee_id')
                ->join('departments', 'employment.department_id = departments.department_id');
            $query = $dtrps->get();

			return $query->result();
		}

        public function get_list(){
            $dtrps = $this->load->database('dtrps', true);

            $dtrps->select('*')
                ->from('employees')
                ->join('employment', 'employment.employee_id = employees.employee_id')
                ->join('departments', 'employment.department_id = departments.department_id')
                ->order_by('department_name', 'DESC');
            $query = $dtrps->get();

            return $query->result();
        }
    	
	}