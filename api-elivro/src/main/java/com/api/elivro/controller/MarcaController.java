package com.api.elivro.controller;

import org.springframework.beans.factory.annotation.Autowired;
import org.springframework.stereotype.Controller;
import org.springframework.ui.ModelMap;
import org.springframework.web.bind.annotation.*;
import org.springframework.web.servlet.mvc.support.RedirectAttributes;

import com.api.elivro.domain.Marca;
import com.api.elivro.service.MarcaService;

@Controller
@RequestMapping("/marcas")
public class MarcaController {

	@Autowired
	private MarcaService service;

	@GetMapping("/cadastrar")
	public String cadastrar(Marca marca) {
		return "marca/cadastro";
	}

	@GetMapping("/listar")
	public String listar(ModelMap model) {
		model.addAttribute("marcas", service.buscarTodos());
		return "marca/lista";
	}

	@PostMapping("salvar")
	public String salvar(Marca marca, RedirectAttributes attr) {
		try {
			service.salvar(marca);
			attr.addFlashAttribute("success", "Registro salvo com sucesso!");
		} catch (Exception e) {
			attr.addFlashAttribute("fail", "Falha ao salvar o registro.");
		}
		return "redirect:/marcas/cadastrar";
	}
	
	@GetMapping("/editar/{id}")
	public String preEditar(@PathVariable("id") Long id, ModelMap model) {
		model.addAttribute("marca", service.buscarPorId(id));
		return "marca/cadastro";
	}
	
	@PostMapping("/editar")
	public String editar(Marca marca, RedirectAttributes attr) {
		try {
			service.atualizar(marca);
			attr.addFlashAttribute("success", "Registro atualizado com sucesso!");
		} catch (Exception e) {
			attr.addFlashAttribute("fail", "Falha ao atualizar o registro.");
		}
		return "redirect:/marcas/listar";
	}
	
	@GetMapping("/excluir/{id}")
	public String excluir(@PathVariable("id") Long id, RedirectAttributes attr) {
		try {
			service.apagar(id);
			attr.addFlashAttribute("success", "Registro apagado com sucesso!");
		} catch (Exception e) {
			attr.addFlashAttribute("fail", "Falha ao excluir o registro.");
		}
		
		return "redirect:/marcas/listar";
	}
	

}
