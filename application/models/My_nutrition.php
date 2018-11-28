<?php if(!defined('BASEPATH')) exit('No direct script access allowed');

/**
 * @file      : Nutrition

*
 */
class My_nutrition extends CI_Model
{
	function __construct()
	{
		parent::__construct();
	}

	function  getFoods($id=null){
		if($id !==null){
			$this->db->where('id',$id);
		}
		return $this->db->get('nutrition');
	}
	/*
	 * add event
	 */
	function add_food()
	{
		if($this->input->post('allDay') == 1) {
			$allDay = 'true';
		} else {
			$allDay = 'false';
		}
		// Values received via ajax
		$data = array(
			'title' => $this->input->post('title'),
			'start' => $this->input->post('start'),
			'start_t' => $this->input->post('start_t'),
			'end' => $this->input->post('end'),
			'end_t' => $this->input->post('end_t'),
			'description' => $this->input->post('desc'),
			'allDay' => $allDay
		);

		$this->db->insert('nutrition', $data); //insert to db

		if($this->db->affected_rows() > 0) { //successful
			flash('success', lang('request_success'));
			//log event
			logEvent("Added Nutrition Food {$data['title']}");
		} else {
			flash('danger', lang('request_error'));
		}
	}

	/*
	 * update event
	 */
	function update_food()
	{
		if($this->input->post('allDay') == 1) {
			$allDay = 'true';
		} else {
			$allDay = 'false';
		}
		// Values received via ajax
		$data = array(
			'title' => $this->input->post('title'),
			'start' => $this->input->post('start'),
			'start_t' => $this->input->post('start_t'),
			'end' => $this->input->post('end'),
			'end_t' => $this->input->post('end_t'),
			'description' => $this->input->post('desc'),
			'allDay' => $allDay
		);

		// update the records
		$this->db->where('id', $this->input->post('id'));
		$this->db->update('nutrition', $data);
		if($this->db->affected_rows() > 0) { //successful
			flash('success', lang('request_success'));
			//log event
			logEvent("Updated nutrition food {$data['title']}");
		} else {
			flash('danger', lang('request_error'));
		}
	}

	/*
	 * delete food
	 */
	function delete_food()
	{
		$id=$this->input->post('food_id');

		$this->db->where('id', $id);
		$this->db->delete('nutrition');
		if($this->db->affected_rows() > 0) { //successful
			//log event
			logEvent("Added nutrition food {$this->getFoods($id)->row()->id}");
			return 'true';
		} else {
			return 'true';
		}
	}
}