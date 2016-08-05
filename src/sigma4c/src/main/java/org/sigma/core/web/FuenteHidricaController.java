package org.sigma.core.web;
import org.sigma.core.domain.FuenteHidrica;
import org.springframework.roo.addon.web.mvc.controller.scaffold.RooWebScaffold;
import org.springframework.stereotype.Controller;
import org.springframework.web.bind.annotation.RequestMapping;

@RequestMapping("/fuentehidricas")
@Controller
@RooWebScaffold(path = "fuentehidricas", formBackingObject = FuenteHidrica.class)
public class FuenteHidricaController {
}
