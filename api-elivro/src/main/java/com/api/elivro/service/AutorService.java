package com.api.elivro.service;

import java.util.List;

import com.api.elivro.domain.Autor;
import com.api.elivro.domain.Categoria;

public interface AutorService {
	void salvar(Autor autor);
	
	void atualizar(Autor autor);
	
	void apagar(Long id);
	
	Autor buscarPorId(Long id);
	
	List<Autor> buscarTodos();
}
