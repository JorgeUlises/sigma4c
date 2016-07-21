package org.sigma.core.repository;
import org.sigma.core.domain.User;
import org.springframework.roo.addon.layers.repository.jpa.RooJpaRepository;

@RooJpaRepository(domainType = User.class)
public interface UserRepository {
}
