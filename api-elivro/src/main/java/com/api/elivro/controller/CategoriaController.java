package com.api.elivro.controller;

import org.springframework.beans.factory.annotation.Autowired;
import org.springframework.stereotype.*;
import org.springframework.ui.ModelMap;
import org.springframework.web.bind.annotation.*;
import org.springframework.web.servlet.mvc.support.RedirectAttributes;

import com.api.elivro.domain.Categoria;
import com.api.elivro.service.CategoriaService;

@Controller
@RequestMapping("/categorias")
public class CategoriaController {

	@Autowired
	private CategoriaService service;

	@GetMapping("/cadastrar")
	public String cadastrar(Categoria categoria) {

		return "categoria/cadastro";
	}

	@GetMapping("/listar")
	public String listar(ModelMap model) {
		model.addAttribute("categorias", service.buscarTodos());
		return "categoria/lista";
	}

	@GetMapping("/editar/{id}")
	public String preEditar(@PathVariable("id") Long id, ModelMap model) {
		model.addAttribute("categoria", service.buscarPorId(id));
		return "categoria/cadastro";
	}

	@PostMapping("/editar")
	public String editar(Categoria categoria, RedirectAttributes attr) {
		try {
			service.atualizar(categoria);
			attr.addFlashAttribute("success", "Categoria atualizada com sucesso!");
		} catch (Exception e) {
			attr.addFlashAttribute("fail", "Falha ao atualizar!");
		}
		
		return "redirect:/categorias/cadastrar";
	}

	@PostMapping("/salvar")
	public String salvar(Categoria categoria, RedirectAttributes attr) {
		try {
			service.salvar(categoria);
			attr.addFlashAttribute("success", "Categoria registrada com sucesso!");

		} catch (Exception e) {
			attr.addFlashAttribute("fail", "Categoria já existe!");
		}
		return "redirect:/categorias/cadastrar";
	}

	@GetMapping("/excluir/{id}")
	public String excluir(@PathVariable("id") Long id, ModelMap model,  RedirectAttributes attr) {
		try {
			service.apagar(id);
			attr.addFlashAttribute("success", "Categoria excluida com sucesso!");
		} catch (Exception e) {
			attr.addFlashAttribute("fail", "Categoria façha ao excluir!");
		}
		
		return listar(model);
	}
}
