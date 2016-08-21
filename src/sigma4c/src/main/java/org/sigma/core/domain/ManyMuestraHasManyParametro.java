package org.sigma.core.domain;
import org.springframework.roo.addon.dbre.RooDbManaged;
import org.springframework.roo.addon.javabean.RooJavaBean;
import org.springframework.roo.addon.jpa.entity.RooJpaEntity;
import org.springframework.roo.addon.tostring.RooToString;

@RooJavaBean
@RooJpaEntity(identifierType = ManyMuestraHasManyParametroPK.class, versionField = "", table = "many_muestra_has_many_parametro", schema = "public")
@RooDbManaged(automaticallyDelete = true)
@RooToString(excludeFields = { "idMuestra", "idParametro" })
public class ManyMuestraHasManyParametro {
}
