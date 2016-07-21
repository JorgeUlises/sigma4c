package org.sigma.core.repository;
import org.sigma.core.domain.Muestra;
import org.springframework.roo.addon.layers.repository.jpa.RooJpaRepository;

@RooJpaRepository(domainType = Muestra.class)
public interface MuestraRepository {
}
