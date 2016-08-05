package org.sigma.core.web;
import org.sigma.core.domain.Proyecto;
import org.springframework.roo.addon.web.mvc.controller.scaffold.RooWebScaffold;
import org.springframework.stereotype.Controller;
import org.springframework.web.bind.annotation.RequestMapping;

@RequestMapping("/proyectoes")
@Controller
@RooWebScaffold(path = "proyectoes", formBackingObject = Proyecto.class)
public class ProyectoController {
}
