package com.api.elivro.dao;

import java.util.List;

import com.api.elivro.domain.Marca;

public interface MarcaDao {
void save(Marca marca);
	
	void update(Marca marca);
	
	void delete(Long id);
	
	Marca findById(Long id);
	
	List<Marca> findAll();
}
