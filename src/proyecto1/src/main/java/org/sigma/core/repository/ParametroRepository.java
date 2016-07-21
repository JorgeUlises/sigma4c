package org.sigma.core.repository;
import org.sigma.core.domain.Parametro;
import org.springframework.roo.addon.layers.repository.jpa.RooJpaRepository;

@RooJpaRepository(domainType = Parametro.class)
public interface ParametroRepository {
}
