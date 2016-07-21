package org.sigma.core.web;
import org.sigma.core.domain.FuenteHidrica;
import org.springframework.roo.addon.web.mvc.controller.scaffold.RooWebScaffold;
import org.springframework.stereotype.Controller;
import org.springframework.web.bind.annotation.RequestMapping;
import org.gvnix.addon.web.mvc.annotations.jquery.GvNIXWebJQuery;
import org.gvnix.addon.datatables.annotations.GvNIXDatatables;

@RequestMapping("/fuentehidricas")
@Controller
@RooWebScaffold(path = "fuentehidricas", formBackingObject = FuenteHidrica.class)
@GvNIXWebJQuery
@GvNIXDatatables(ajax = true)
public class FuenteHidricaController {
}
