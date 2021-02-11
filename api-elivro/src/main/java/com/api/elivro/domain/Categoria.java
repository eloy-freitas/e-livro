package com.api.elivro.domain;

import javax.persistence.*;

@Entity
@Table(name = "CATEGORIAS")
public class Categoria extends AbstractEntity<Long>{
	
	@Column(name = "nome", nullable = false, unique = true, length = 60)
	private String nome;

	public String getNome() {
		return nome;
	}

	public void setNome(String nome) {
		this.nome = nome;
	}
	
}
