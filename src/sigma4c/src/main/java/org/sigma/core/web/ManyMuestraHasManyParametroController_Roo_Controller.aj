// WARNING: DO NOT EDIT THIS FILE. THIS FILE IS MANAGED BY SPRING ROO.
// You may push code into the target .java compilation unit if you wish to edit any member(s).

package org.sigma.core.web;

import java.io.UnsupportedEncodingException;
import javax.servlet.http.HttpServletRequest;
import org.sigma.core.domain.ManyMuestraHasManyParametro;
import org.sigma.core.web.ManyMuestraHasManyParametroController;
import org.springframework.beans.factory.annotation.Autowired;
import org.springframework.core.convert.ConversionService;
import org.springframework.ui.Model;
import org.springframework.web.util.UriUtils;
import org.springframework.web.util.WebUtils;

privileged aspect ManyMuestraHasManyParametroController_Roo_Controller {
    
    private ConversionService ManyMuestraHasManyParametroController.conversionService;
    
    @Autowired
    public ManyMuestraHasManyParametroController.new(ConversionService conversionService) {
        super();
        this.conversionService = conversionService;
    }

    void ManyMuestraHasManyParametroController.populateEditForm(Model uiModel, ManyMuestraHasManyParametro manyMuestraHasManyParametro) {
        uiModel.addAttribute("manyMuestraHasManyParametro", manyMuestraHasManyParametro);
    }
    
    String ManyMuestraHasManyParametroController.encodeUrlPathSegment(String pathSegment, HttpServletRequest httpServletRequest) {
        String enc = httpServletRequest.getCharacterEncoding();
        if (enc == null) {
            enc = WebUtils.DEFAULT_CHARACTER_ENCODING;
        }
        try {
            pathSegment = UriUtils.encodePathSegment(pathSegment, enc);
        } catch (UnsupportedEncodingException uee) {}
        return pathSegment;
    }
    
}
