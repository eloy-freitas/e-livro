package com.api.elivro.service;

import java.util.List;

import com.api.elivro.domain.Categoria;

public interface CategoriaService {
	void salvar(Categoria categoria);
	
	void atualizar(Categoria categoria);
	
	void apagar(Long id);
	
	Categoria buscarPorId(Long id);
	
	List<Categoria> buscarTodos();

	//boolean categoriaTemProduto(Long id);
}
