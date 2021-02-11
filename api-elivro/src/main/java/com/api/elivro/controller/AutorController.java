package com.api.elivro.controller;

import org.springframework.beans.factory.annotation.Autowired;
import org.springframework.stereotype.*;
import org.springframework.ui.ModelMap;
import org.springframework.web.bind.annotation.*;
import org.springframework.web.servlet.mvc.support.RedirectAttributes;

import com.api.elivro.domain.Autor;
import com.api.elivro.service.AutorService;

@Controller
@RequestMapping("/autores")
public class AutorController {

	@Autowired
	private AutorService service;
	
	@GetMapping("/cadastrar")
	public String cadastrar(Autor autor) {
		
		return "autor/cadastro";
	}
	
	@GetMapping("/listar")
	public String listar(ModelMap model) {
		model.addAttribute("autores", service.buscarTodos());
		return "autor/lista";
	}
	
	@PostMapping("/salvar")
	public String salvar(Autor autor, RedirectAttributes attr) {
		try {
			service.salvar(autor);
			attr.addFlashAttribute("success", "Registro salvo com sucesso!");
		}catch (Exception e) {
			attr.addFlashAttribute("fail", "Falha ao salvar o registro");
		}
		return "redirect:/autores/cadastrar";
	}
	
	@GetMapping("/editar/{id}")
	public String preEditar(@PathVariable("id") Long id, ModelMap model) {
		model.addAttribute("autor", service.buscarPorId(id));
		return "autor/cadastro";
	}
	
	@PostMapping("/editar")
	public String editar(Autor autor, RedirectAttributes attr) {
		try {
			service.atualizar(autor);
			attr.addFlashAttribute("success", "Registro atualizado com sucesso!");
		} catch (Exception e) {
			attr.addFlashAttribute("fail", "Falha ao salvar registro!");
		}
		return "redirect:/autores/listar";
	}
	
	@GetMapping("/excluir/{id}")
	public String excluir(@PathVariable("id") Long id, RedirectAttributes attr) {
		try {
			service.apagar(id);
			attr.addFlashAttribute("success", "Registro excluido com sucesso!");
		} catch (Exception e) {
			attr.addFlashAttribute("fail", "Falha ao apagar registro");
		}
		return "redirect:/autores/listar";
	}
}
