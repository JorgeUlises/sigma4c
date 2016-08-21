package org.sigma.core.web;
import org.sigma.core.domain.ManyMuestraHasManyParametro;
import org.springframework.roo.addon.web.mvc.controller.scaffold.RooWebScaffold;
import org.springframework.stereotype.Controller;
import org.springframework.web.bind.annotation.RequestMapping;
import org.gvnix.addon.web.mvc.annotations.jquery.GvNIXWebJQuery;

@RequestMapping("/manymuestrahasmanyparametroes")
@Controller
@RooWebScaffold(path = "manymuestrahasmanyparametroes", formBackingObject = ManyMuestraHasManyParametro.class)
@GvNIXWebJQuery
public class ManyMuestraHasManyParametroController {
}
