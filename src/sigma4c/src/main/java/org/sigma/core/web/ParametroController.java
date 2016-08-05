package org.sigma.core.web;
import org.sigma.core.domain.Parametro;
import org.springframework.roo.addon.web.mvc.controller.scaffold.RooWebScaffold;
import org.springframework.stereotype.Controller;
import org.springframework.web.bind.annotation.RequestMapping;

@RequestMapping("/parametroes")
@Controller
@RooWebScaffold(path = "parametroes", formBackingObject = Parametro.class)
public class ParametroController {
}
