package org.sigma.core.repository;
import org.sigma.core.domain.Proyecto;
import org.springframework.roo.addon.layers.repository.jpa.RooJpaRepository;

@RooJpaRepository(domainType = Proyecto.class)
public interface ProyectoRepository {
}
