package com.api.elivro.dao;

import java.util.List;

import com.api.elivro.domain.Autor;

public interface AutorDao {
	void save(Autor autor);
	
	void update(Autor autor);
	
	void delete(Long id);
	
	Autor findById(Long id);
	
	List<Autor> findAll();
}
