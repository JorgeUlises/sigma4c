package org.sigma.core.repository;
import org.sigma.core.domain.FuenteHidrica;
import org.springframework.roo.addon.layers.repository.jpa.RooJpaRepository;

@RooJpaRepository(domainType = FuenteHidrica.class)
public interface FuenteHidricaRepository {
}
