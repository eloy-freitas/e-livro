package com.api.elivro.service;

import java.util.List;

import com.api.elivro.domain.Marca;

public interface MarcaService {
	void salvar(Marca marca);
	
	void atualizar(Marca marca);
	
	void apagar(Long id);
	
	Marca buscarPorId(Long id);
	
	List<Marca> buscarTodos();
}
