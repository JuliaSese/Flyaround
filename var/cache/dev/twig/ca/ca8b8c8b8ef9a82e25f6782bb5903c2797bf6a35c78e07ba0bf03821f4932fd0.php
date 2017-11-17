<?php

/* :terrain:index.html.twig */
class __TwigTemplate_01e30c7bdd4f27812500c92d9fa3b7ca8f0a2eca91d4dbb93cd4086085caceb6 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", ":terrain:index.html.twig", 1);
        $this->blocks = array(
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_601d6cd9808256e229c7fa81041f7c712af70806e1a03be7f80f59034aad7a0c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_601d6cd9808256e229c7fa81041f7c712af70806e1a03be7f80f59034aad7a0c->enter($__internal_601d6cd9808256e229c7fa81041f7c712af70806e1a03be7f80f59034aad7a0c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":terrain:index.html.twig"));

        $__internal_ab021b88317f6c09e19c695f3df8e59062db14ba8bbe6efd6a3f7c2e540c6b4f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ab021b88317f6c09e19c695f3df8e59062db14ba8bbe6efd6a3f7c2e540c6b4f->enter($__internal_ab021b88317f6c09e19c695f3df8e59062db14ba8bbe6efd6a3f7c2e540c6b4f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":terrain:index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_601d6cd9808256e229c7fa81041f7c712af70806e1a03be7f80f59034aad7a0c->leave($__internal_601d6cd9808256e229c7fa81041f7c712af70806e1a03be7f80f59034aad7a0c_prof);

        
        $__internal_ab021b88317f6c09e19c695f3df8e59062db14ba8bbe6efd6a3f7c2e540c6b4f->leave($__internal_ab021b88317f6c09e19c695f3df8e59062db14ba8bbe6efd6a3f7c2e540c6b4f_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_b5bc1bf74b5cff32f7c8d82a65da3f8ea0a8d277fcc9e9d3bdec3625f9c63392 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b5bc1bf74b5cff32f7c8d82a65da3f8ea0a8d277fcc9e9d3bdec3625f9c63392->enter($__internal_b5bc1bf74b5cff32f7c8d82a65da3f8ea0a8d277fcc9e9d3bdec3625f9c63392_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_56fd614c65c6f9506b9b3d09b880a0b1ea0c78b964980cdad992c7a0692edd68 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_56fd614c65c6f9506b9b3d09b880a0b1ea0c78b964980cdad992c7a0692edd68->enter($__internal_56fd614c65c6f9506b9b3d09b880a0b1ea0c78b964980cdad992c7a0692edd68_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    <h1>Terrains list</h1>

    <table>
        <thead>
            <tr>
                <th>Id</th>
                <th>Name</th>
                <th>Icao</th>
                <th>Latitude</th>
                <th>Longitude</th>
                <th>Address</th>
                <th>City</th>
                <th>Zipcode</th>
                <th>Country</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
        ";
        // line 22
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["terrains"] ?? $this->getContext($context, "terrains")));
        foreach ($context['_seq'] as $context["_key"] => $context["terrain"]) {
            // line 23
            echo "            <tr>
                <td><a href=\"";
            // line 24
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("terrain_show", array("id" => $this->getAttribute($context["terrain"], "id", array()))), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute($context["terrain"], "id", array()), "html", null, true);
            echo "</a></td>
                <td>";
            // line 25
            echo twig_escape_filter($this->env, $this->getAttribute($context["terrain"], "name", array()), "html", null, true);
            echo "</td>
                <td>";
            // line 26
            echo twig_escape_filter($this->env, $this->getAttribute($context["terrain"], "icao", array()), "html", null, true);
            echo "</td>
                <td>";
            // line 27
            echo twig_escape_filter($this->env, $this->getAttribute($context["terrain"], "latitude", array()), "html", null, true);
            echo "</td>
                <td>";
            // line 28
            echo twig_escape_filter($this->env, $this->getAttribute($context["terrain"], "longitude", array()), "html", null, true);
            echo "</td>
                <td>";
            // line 29
            echo twig_escape_filter($this->env, $this->getAttribute($context["terrain"], "address", array()), "html", null, true);
            echo "</td>
                <td>";
            // line 30
            echo twig_escape_filter($this->env, $this->getAttribute($context["terrain"], "city", array()), "html", null, true);
            echo "</td>
                <td>";
            // line 31
            echo twig_escape_filter($this->env, $this->getAttribute($context["terrain"], "zipcode", array()), "html", null, true);
            echo "</td>
                <td>";
            // line 32
            echo twig_escape_filter($this->env, $this->getAttribute($context["terrain"], "country", array()), "html", null, true);
            echo "</td>
                <td>
                    <ul>
                        <li>
                            <a href=\"";
            // line 36
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("terrain_show", array("id" => $this->getAttribute($context["terrain"], "id", array()))), "html", null, true);
            echo "\">show</a>
                        </li>
                    </ul>
                </td>
            </tr>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['terrain'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 42
        echo "        </tbody>
    </table>

    
";
        
        $__internal_56fd614c65c6f9506b9b3d09b880a0b1ea0c78b964980cdad992c7a0692edd68->leave($__internal_56fd614c65c6f9506b9b3d09b880a0b1ea0c78b964980cdad992c7a0692edd68_prof);

        
        $__internal_b5bc1bf74b5cff32f7c8d82a65da3f8ea0a8d277fcc9e9d3bdec3625f9c63392->leave($__internal_b5bc1bf74b5cff32f7c8d82a65da3f8ea0a8d277fcc9e9d3bdec3625f9c63392_prof);

    }

    public function getTemplateName()
    {
        return ":terrain:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  129 => 42,  117 => 36,  110 => 32,  106 => 31,  102 => 30,  98 => 29,  94 => 28,  90 => 27,  86 => 26,  82 => 25,  76 => 24,  73 => 23,  69 => 22,  49 => 4,  40 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends 'base.html.twig' %}

{% block body %}
    <h1>Terrains list</h1>

    <table>
        <thead>
            <tr>
                <th>Id</th>
                <th>Name</th>
                <th>Icao</th>
                <th>Latitude</th>
                <th>Longitude</th>
                <th>Address</th>
                <th>City</th>
                <th>Zipcode</th>
                <th>Country</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
        {% for terrain in terrains %}
            <tr>
                <td><a href=\"{{ path('terrain_show', { 'id': terrain.id }) }}\">{{ terrain.id }}</a></td>
                <td>{{ terrain.name }}</td>
                <td>{{ terrain.icao }}</td>
                <td>{{ terrain.latitude }}</td>
                <td>{{ terrain.longitude }}</td>
                <td>{{ terrain.address }}</td>
                <td>{{ terrain.city }}</td>
                <td>{{ terrain.zipcode }}</td>
                <td>{{ terrain.country }}</td>
                <td>
                    <ul>
                        <li>
                            <a href=\"{{ path('terrain_show', { 'id': terrain.id }) }}\">show</a>
                        </li>
                    </ul>
                </td>
            </tr>
        {% endfor %}
        </tbody>
    </table>

    
{% endblock %}
", ":terrain:index.html.twig", "/var/www/html/flyaround/app/Resources/views/terrain/index.html.twig");
    }
}
