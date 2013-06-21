<?php

interface UserRepositoryInterface {
	public function findById($id);
	public function store($data);
	public function update($id, $data);
	public function destroy($id);
	public function data();
}