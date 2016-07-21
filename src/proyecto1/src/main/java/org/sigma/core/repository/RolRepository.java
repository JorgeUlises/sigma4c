package org.sigma.core.repository;
import org.sigma.core.domain.Rol;
import org.springframework.roo.addon.layers.repository.jpa.RooJpaRepository;

@RooJpaRepository(domainType = Rol.class)
public interface RolRepository {
}
