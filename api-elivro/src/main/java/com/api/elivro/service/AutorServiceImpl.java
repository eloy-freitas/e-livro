package com.api.elivro.service;

import java.util.List;

import org.springframework.beans.factory.annotation.Autowired;
import org.springframework.stereotype.*;
import org.springframework.transaction.annotation.Transactional;

import com.api.elivro.dao.AutorDao;
import com.api.elivro.domain.Autor;

@Service
@Transactional(readOnly = false)
public class AutorServiceImpl implements AutorService{

	@Autowired
	private AutorDao dao;
	
	@Override
	public void salvar(Autor autor) {
		dao.save(autor);
		
	}

	@Override
	public void atualizar(Autor autor) {
		dao.update(autor);
		
	}

	@Override
	public void apagar(Long id) {
		dao.delete(id);
		
	}

	@Override @Transactional(readOnly = true)
	public Autor buscarPorId(Long id) {
	
		return dao.findById(id);
	}
 
	@Override @Transactional(readOnly = true)
	public List<Autor> buscarTodos() {
		
		return dao.findAll();
	}

}
