<?php

/* :planemodel:show.html.twig */
class __TwigTemplate_45b5b9c104c7581794e2a6ef7dc47736a1abb1e5ad810c226c58463b37092e1d extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", ":planemodel:show.html.twig", 1);
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
        $__internal_d02540a6a627b5a9573d019d46cf2ad130ca0e8f5140a035713d7e45316092fb = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d02540a6a627b5a9573d019d46cf2ad130ca0e8f5140a035713d7e45316092fb->enter($__internal_d02540a6a627b5a9573d019d46cf2ad130ca0e8f5140a035713d7e45316092fb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":planemodel:show.html.twig"));

        $__internal_a9123c4d364c59ef3c3b288467db79e0c5b262c913c8becb54403815cf64021a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a9123c4d364c59ef3c3b288467db79e0c5b262c913c8becb54403815cf64021a->enter($__internal_a9123c4d364c59ef3c3b288467db79e0c5b262c913c8becb54403815cf64021a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":planemodel:show.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_d02540a6a627b5a9573d019d46cf2ad130ca0e8f5140a035713d7e45316092fb->leave($__internal_d02540a6a627b5a9573d019d46cf2ad130ca0e8f5140a035713d7e45316092fb_prof);

        
        $__internal_a9123c4d364c59ef3c3b288467db79e0c5b262c913c8becb54403815cf64021a->leave($__internal_a9123c4d364c59ef3c3b288467db79e0c5b262c913c8becb54403815cf64021a_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_22571b0d105356a31e7952f2643f97eb9427f91043654b375927fb79e79317c8 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_22571b0d105356a31e7952f2643f97eb9427f91043654b375927fb79e79317c8->enter($__internal_22571b0d105356a31e7952f2643f97eb9427f91043654b375927fb79e79317c8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_b1388c771ced502bdcc4eebb1d94e8652d8214725826c2891f62087f63e75b7c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b1388c771ced502bdcc4eebb1d94e8652d8214725826c2891f62087f63e75b7c->enter($__internal_b1388c771ced502bdcc4eebb1d94e8652d8214725826c2891f62087f63e75b7c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    <h1>Planemodel</h1>

    <table>
        <tbody>
            <tr>
                <th>Id</th>
                <td>";
        // line 10
        echo twig_escape_filter($this->env, $this->getAttribute(($context["planeModel"] ?? $this->getContext($context, "planeModel")), "id", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Model</th>
                <td>";
        // line 14
        echo twig_escape_filter($this->env, $this->getAttribute(($context["planeModel"] ?? $this->getContext($context, "planeModel")), "model", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Manufacturer</th>
                <td>";
        // line 18
        echo twig_escape_filter($this->env, $this->getAttribute(($context["planeModel"] ?? $this->getContext($context, "planeModel")), "manufacturer", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Cruisespeed</th>
                <td>";
        // line 22
        echo twig_escape_filter($this->env, $this->getAttribute(($context["planeModel"] ?? $this->getContext($context, "planeModel")), "cruiseSpeed", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Planenbseats</th>
                <td>";
        // line 26
        echo twig_escape_filter($this->env, $this->getAttribute(($context["planeModel"] ?? $this->getContext($context, "planeModel")), "planeNbSeats", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Isavailable</th>
                <td>";
        // line 30
        if ($this->getAttribute(($context["planeModel"] ?? $this->getContext($context, "planeModel")), "isAvailable", array())) {
            echo "Yes";
        } else {
            echo "No";
        }
        echo "</td>
            </tr>
        </tbody>
    </table>

    <ul>
        <li>
            <a href=\"";
        // line 37
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("planemodel_index");
        echo "\">Back to the list</a>
        </li>
        <li>
            <a href=\"";
        // line 40
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("planemodel_edit", array("id" => $this->getAttribute(($context["planeModel"] ?? $this->getContext($context, "planeModel")), "id", array()))), "html", null, true);
        echo "\">Edit</a>
        </li>
        <li>
            ";
        // line 43
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock(($context["delete_form"] ?? $this->getContext($context, "delete_form")), 'form_start');
        echo "
                <input type=\"submit\" value=\"Delete\">
            ";
        // line 45
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock(($context["delete_form"] ?? $this->getContext($context, "delete_form")), 'form_end');
        echo "
        </li>
    </ul>
";
        
        $__internal_b1388c771ced502bdcc4eebb1d94e8652d8214725826c2891f62087f63e75b7c->leave($__internal_b1388c771ced502bdcc4eebb1d94e8652d8214725826c2891f62087f63e75b7c_prof);

        
        $__internal_22571b0d105356a31e7952f2643f97eb9427f91043654b375927fb79e79317c8->leave($__internal_22571b0d105356a31e7952f2643f97eb9427f91043654b375927fb79e79317c8_prof);

    }

    public function getTemplateName()
    {
        return ":planemodel:show.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  123 => 45,  118 => 43,  112 => 40,  106 => 37,  92 => 30,  85 => 26,  78 => 22,  71 => 18,  64 => 14,  57 => 10,  49 => 4,  40 => 3,  11 => 1,);
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
    <h1>Planemodel</h1>

    <table>
        <tbody>
            <tr>
                <th>Id</th>
                <td>{{ planeModel.id }}</td>
            </tr>
            <tr>
                <th>Model</th>
                <td>{{ planeModel.model }}</td>
            </tr>
            <tr>
                <th>Manufacturer</th>
                <td>{{ planeModel.manufacturer }}</td>
            </tr>
            <tr>
                <th>Cruisespeed</th>
                <td>{{ planeModel.cruiseSpeed }}</td>
            </tr>
            <tr>
                <th>Planenbseats</th>
                <td>{{ planeModel.planeNbSeats }}</td>
            </tr>
            <tr>
                <th>Isavailable</th>
                <td>{% if planeModel.isAvailable %}Yes{% else %}No{% endif %}</td>
            </tr>
        </tbody>
    </table>

    <ul>
        <li>
            <a href=\"{{ path('planemodel_index') }}\">Back to the list</a>
        </li>
        <li>
            <a href=\"{{ path('planemodel_edit', { 'id': planeModel.id }) }}\">Edit</a>
        </li>
        <li>
            {{ form_start(delete_form) }}
                <input type=\"submit\" value=\"Delete\">
            {{ form_end(delete_form) }}
        </li>
    </ul>
{% endblock %}
", ":planemodel:show.html.twig", "/var/www/html/flyaround/app/Resources/views/planemodel/show.html.twig");
    }
}
