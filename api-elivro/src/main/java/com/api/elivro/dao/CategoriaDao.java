package com.api.elivro.dao;

import java.util.List;

import com.api.elivro.domain.Categoria;

public interface CategoriaDao {
	
	void save(Categoria categoria);
	
	void update(Categoria categoria);
	
	void delete(Long id);
	
	Categoria findById(Long id);
	
	List<Categoria> findAll();
	
}
