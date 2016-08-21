package org.sigma.core.web;
import org.sigma.core.domain.Proyecto;
import org.springframework.roo.addon.web.mvc.controller.scaffold.RooWebScaffold;
import org.springframework.stereotype.Controller;
import org.springframework.web.bind.annotation.RequestMapping;
import org.gvnix.addon.web.mvc.annotations.jquery.GvNIXWebJQuery;

@RequestMapping("/proyectoes")
@Controller
@RooWebScaffold(path = "proyectoes", formBackingObject = Proyecto.class)
@GvNIXWebJQuery
public class ProyectoController {
}
