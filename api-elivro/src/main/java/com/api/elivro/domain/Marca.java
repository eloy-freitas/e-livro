package com.api.elivro.domain;

import javax.persistence.*;

@Entity
@Table(name = "MARCAS")
public class Marca extends AbstractEntity<Long>{
	
	@Column(name = "nome", unique = true, nullable = false, length = 60)
	private String nome;

	public String getNome() {
		return nome;
	}

	public void setNome(String nome) {
		this.nome = nome;
	}
	
}
