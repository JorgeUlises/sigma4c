// WARNING: DO NOT EDIT THIS FILE. THIS FILE IS MANAGED BY SPRING ROO.
// You may push code into the target .java compilation unit if you wish to edit any member(s).

package org.sigma.core.domain;

import java.util.Set;
import javax.persistence.CascadeType;
import javax.persistence.Column;
import javax.persistence.ManyToMany;
import org.sigma.core.domain.Muestra;
import org.sigma.core.domain.Parametro;

privileged aspect Parametro_Roo_DbManaged {
    
    @ManyToMany(mappedBy = "parametroes", cascade = { CascadeType.PERSIST, CascadeType.MERGE })
    private Set<Muestra> Parametro.muestras;
    
    @Column(name = "nombre")
    private String Parametro.nombre;
    
    @Column(name = "unidad")
    private String Parametro.unidad;
    
    @Column(name = "concentracion")
    private String Parametro.concentracion;
    
    @Column(name = "tec_analitic")
    private String Parametro.tecAnalitic;
    
    public Set<Muestra> Parametro.getMuestras() {
        return muestras;
    }
    
    public void Parametro.setMuestras(Set<Muestra> muestras) {
        this.muestras = muestras;
    }
    
    public String Parametro.getNombre() {
        return nombre;
    }
    
    public void Parametro.setNombre(String nombre) {
        this.nombre = nombre;
    }
    
    public String Parametro.getUnidad() {
        return unidad;
    }
    
    public void Parametro.setUnidad(String unidad) {
        this.unidad = unidad;
    }
    
    public String Parametro.getConcentracion() {
        return concentracion;
    }
    
    public void Parametro.setConcentracion(String concentracion) {
        this.concentracion = concentracion;
    }
    
    public String Parametro.getTecAnalitic() {
        return tecAnalitic;
    }
    
    public void Parametro.setTecAnalitic(String tecAnalitic) {
        this.tecAnalitic = tecAnalitic;
    }
    
}