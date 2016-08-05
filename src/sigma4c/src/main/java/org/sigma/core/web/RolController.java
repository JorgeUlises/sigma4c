package org.sigma.core.web;
import org.sigma.core.domain.Rol;
import org.springframework.roo.addon.web.mvc.controller.scaffold.RooWebScaffold;
import org.springframework.stereotype.Controller;
import org.springframework.web.bind.annotation.RequestMapping;

@RequestMapping("/rols")
@Controller
@RooWebScaffold(path = "rols", formBackingObject = Rol.class)
public class RolController {
}
