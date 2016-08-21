package org.sigma.core.web;
import org.sigma.core.domain.SpatialRefSys;
import org.springframework.roo.addon.web.mvc.controller.scaffold.RooWebScaffold;
import org.springframework.stereotype.Controller;
import org.springframework.web.bind.annotation.RequestMapping;
import org.gvnix.addon.web.mvc.annotations.jquery.GvNIXWebJQuery;

@RequestMapping("/spatialrefsyses")
@Controller
@RooWebScaffold(path = "spatialrefsyses", formBackingObject = SpatialRefSys.class)
@GvNIXWebJQuery
public class SpatialRefSysController {
}
