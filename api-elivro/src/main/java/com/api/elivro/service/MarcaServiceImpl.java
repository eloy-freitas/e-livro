package com.api.elivro.service;

import java.util.List;

import org.springframework.beans.factory.annotation.*;
import org.springframework.stereotype.*;
import org.springframework.transaction.annotation.Transactional;

import com.api.elivro.dao.MarcaDao;
import com.api.elivro.domain.Marca;

@Service
@Transactional(readOnly = false)
public class MarcaServiceImpl implements MarcaService{
	
	@Autowired
	private MarcaDao dao;
	
	@Override
	public void salvar(Marca marca) {
		dao.save(marca);
	}

	@Override
	public void atualizar(Marca marca) {
		dao.update(marca);
	}

	@Override
	public void apagar(Long id) {
		dao.delete(id);
	}

	@Override @Transactional(readOnly = true)
	public Marca buscarPorId(Long id) {
		
		return dao.findById(id);
	}

	@Override @Transactional(readOnly = true)
	public List<Marca> buscarTodos() {
		
		return dao.findAll();
	}

}
