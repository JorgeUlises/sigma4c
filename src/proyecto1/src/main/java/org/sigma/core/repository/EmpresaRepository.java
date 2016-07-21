package org.sigma.core.repository;
import org.sigma.core.domain.Empresa;
import org.springframework.roo.addon.layers.repository.jpa.RooJpaRepository;

@RooJpaRepository(domainType = Empresa.class)
public interface EmpresaRepository {
}
