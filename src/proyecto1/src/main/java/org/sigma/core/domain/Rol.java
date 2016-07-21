package org.sigma.core.domain;
import org.springframework.roo.addon.dbre.RooDbManaged;
import org.springframework.roo.addon.javabean.RooJavaBean;
import org.springframework.roo.addon.jpa.entity.RooJpaEntity;
import org.springframework.roo.addon.tostring.RooToString;

@RooJavaBean
@RooJpaEntity(versionField = "", table = "rol", schema = "public")
@RooDbManaged(automaticallyDelete = true)
@RooToString(excludeFields = { "users" })
public class Rol {
}
