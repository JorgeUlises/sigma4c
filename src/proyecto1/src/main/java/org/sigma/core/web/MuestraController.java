package org.sigma.core.web;
import org.sigma.core.domain.Muestra;
import org.springframework.roo.addon.web.mvc.controller.scaffold.RooWebScaffold;
import org.springframework.stereotype.Controller;
import org.springframework.web.bind.annotation.RequestMapping;
import org.gvnix.addon.web.mvc.annotations.jquery.GvNIXWebJQuery;
import org.gvnix.addon.datatables.annotations.GvNIXDatatables;

@RequestMapping("/muestras")
@Controller
@RooWebScaffold(path = "muestras", formBackingObject = Muestra.class)
@GvNIXWebJQuery
@GvNIXDatatables(ajax = true)
public class MuestraController {
}
