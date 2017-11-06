<?php

/* planemodel/index.html.twig */
class __TwigTemplate_ff89b9502bbca9e6e6e40d8ee759954e03a460b76c2bc77764c9087b848d075b extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "planemodel/index.html.twig", 1);
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
        $__internal_56b1349f26f54daa1fdbdc011b1fac2fd841e9c2f0d824b6bc97bfd8bbd3d91c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_56b1349f26f54daa1fdbdc011b1fac2fd841e9c2f0d824b6bc97bfd8bbd3d91c->enter($__internal_56b1349f26f54daa1fdbdc011b1fac2fd841e9c2f0d824b6bc97bfd8bbd3d91c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "planemodel/index.html.twig"));

        $__internal_5cf27d4fe52902028a12afc315756c2013528b23fb32a80a488b516db31817da = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5cf27d4fe52902028a12afc315756c2013528b23fb32a80a488b516db31817da->enter($__internal_5cf27d4fe52902028a12afc315756c2013528b23fb32a80a488b516db31817da_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "planemodel/index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_56b1349f26f54daa1fdbdc011b1fac2fd841e9c2f0d824b6bc97bfd8bbd3d91c->leave($__internal_56b1349f26f54daa1fdbdc011b1fac2fd841e9c2f0d824b6bc97bfd8bbd3d91c_prof);

        
        $__internal_5cf27d4fe52902028a12afc315756c2013528b23fb32a80a488b516db31817da->leave($__internal_5cf27d4fe52902028a12afc315756c2013528b23fb32a80a488b516db31817da_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_3c80e3a16a932cef719ac8d387d7d300fa4b25bba27aeae448f3215f7d657f7c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3c80e3a16a932cef719ac8d387d7d300fa4b25bba27aeae448f3215f7d657f7c->enter($__internal_3c80e3a16a932cef719ac8d387d7d300fa4b25bba27aeae448f3215f7d657f7c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_0735b67e39fd5ffef44bad7f6d8ee2806026ae2bb9902df26b3eb9c2e84c931e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0735b67e39fd5ffef44bad7f6d8ee2806026ae2bb9902df26b3eb9c2e84c931e->enter($__internal_0735b67e39fd5ffef44bad7f6d8ee2806026ae2bb9902df26b3eb9c2e84c931e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    <h1>Planemodels list</h1>

    <table>
        <thead>
            <tr>
                <th>Id</th>
                <th>Model</th>
                <th>Manufacturer</th>
                <th>Cruisespeed</th>
                <th>Planenbseats</th>
                <th>Isavailable</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
        ";
        // line 19
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["planeModels"]) || array_key_exists("planeModels", $context) ? $context["planeModels"] : (function () { throw new Twig_Error_Runtime('Variable "planeModels" does not exist.', 19, $this->getSourceContext()); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["planeModel"]) {
            // line 20
            echo "            <tr>
                <td><a href=\"";
            // line 21
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("planemodel_show", array("id" => twig_get_attribute($this->env, $this->getSourceContext(), $context["planeModel"], "id", array()))), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["planeModel"], "id", array()), "html", null, true);
            echo "</a></td>
                <td>";
            // line 22
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["planeModel"], "model", array()), "html", null, true);
            echo "</td>
                <td>";
            // line 23
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["planeModel"], "manufacturer", array()), "html", null, true);
            echo "</td>
                <td>";
            // line 24
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["planeModel"], "cruiseSpeed", array()), "html", null, true);
            echo "</td>
                <td>";
            // line 25
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["planeModel"], "planeNbSeats", array()), "html", null, true);
            echo "</td>
                <td>";
            // line 26
            if (twig_get_attribute($this->env, $this->getSourceContext(), $context["planeModel"], "isAvailable", array())) {
                echo "Yes";
            } else {
                echo "No";
            }
            echo "</td>
                <td>
                    <ul>
                        <li>
                            <a href=\"";
            // line 30
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("planemodel_show", array("id" => twig_get_attribute($this->env, $this->getSourceContext(), $context["planeModel"], "id", array()))), "html", null, true);
            echo "\">show</a>
                        </li>
                        <li>
                            <a href=\"";
            // line 33
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("planemodel_edit", array("id" => twig_get_attribute($this->env, $this->getSourceContext(), $context["planeModel"], "id", array()))), "html", null, true);
            echo "\">edit</a>
                        </li>
                    </ul>
                </td>
            </tr>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['planeModel'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 39
        echo "        </tbody>
    </table>

    <ul>
        <li>
            <a href=\"";
        // line 44
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("planemodel_new");
        echo "\">Create a new planeModel</a>
        </li>
    </ul>
";
        
        $__internal_0735b67e39fd5ffef44bad7f6d8ee2806026ae2bb9902df26b3eb9c2e84c931e->leave($__internal_0735b67e39fd5ffef44bad7f6d8ee2806026ae2bb9902df26b3eb9c2e84c931e_prof);

        
        $__internal_3c80e3a16a932cef719ac8d387d7d300fa4b25bba27aeae448f3215f7d657f7c->leave($__internal_3c80e3a16a932cef719ac8d387d7d300fa4b25bba27aeae448f3215f7d657f7c_prof);

    }

    public function getTemplateName()
    {
        return "planemodel/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  131 => 44,  124 => 39,  112 => 33,  106 => 30,  95 => 26,  91 => 25,  87 => 24,  83 => 23,  79 => 22,  73 => 21,  70 => 20,  66 => 19,  49 => 4,  40 => 3,  11 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends 'base.html.twig' %}

{% block body %}
    <h1>Planemodels list</h1>

    <table>
        <thead>
            <tr>
                <th>Id</th>
                <th>Model</th>
                <th>Manufacturer</th>
                <th>Cruisespeed</th>
                <th>Planenbseats</th>
                <th>Isavailable</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
        {% for planeModel in planeModels %}
            <tr>
                <td><a href=\"{{ path('planemodel_show', { 'id': planeModel.id }) }}\">{{ planeModel.id }}</a></td>
                <td>{{ planeModel.model }}</td>
                <td>{{ planeModel.manufacturer }}</td>
                <td>{{ planeModel.cruiseSpeed }}</td>
                <td>{{ planeModel.planeNbSeats }}</td>
                <td>{% if planeModel.isAvailable %}Yes{% else %}No{% endif %}</td>
                <td>
                    <ul>
                        <li>
                            <a href=\"{{ path('planemodel_show', { 'id': planeModel.id }) }}\">show</a>
                        </li>
                        <li>
                            <a href=\"{{ path('planemodel_edit', { 'id': planeModel.id }) }}\">edit</a>
                        </li>
                    </ul>
                </td>
            </tr>
        {% endfor %}
        </tbody>
    </table>

    <ul>
        <li>
            <a href=\"{{ path('planemodel_new') }}\">Create a new planeModel</a>
        </li>
    </ul>
{% endblock %}
", "planemodel/index.html.twig", "/var/www/html/flyaround/app/Resources/views/planemodel/index.html.twig");
    }
}
