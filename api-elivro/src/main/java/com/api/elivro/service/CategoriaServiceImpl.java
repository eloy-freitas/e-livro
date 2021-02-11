package com.api.elivro.service;

import java.util.List;



import org.springframework.beans.factory.annotation.Autowired;
import org.springframework.stereotype.Service;
import org.springframework.transaction.annotation.Transactional;

import com.api.elivro.dao.CategoriaDao;
import com.api.elivro.domain.Categoria;

@Service @Transactional(readOnly = false)
public class CategoriaServiceImpl implements CategoriaService {

	@Autowired
	private CategoriaDao dao;
	
	@Override
	public void salvar(Categoria categoria) {
		dao.save(categoria);
	}

	@Override
	public void atualizar(Categoria categoria) {
		dao.update(categoria);
	}

	@Override
	public void apagar(Long id) {
		dao.delete(id);
	}

	@Override @Transactional(readOnly = true)
	public Categoria buscarPorId(Long id) {
		return dao.findById(id);
	}

	@Override @Transactional(readOnly = true)
	public List<Categoria> buscarTodos() {
		return dao.findAll();
	}

	/*@Override
	public boolean categoriaTemProduto(Long id) {
		if(buscarPorId(id).getCategorias().isEMpty())) {
			return false;	
		}
		return true;
	}
*/
}
