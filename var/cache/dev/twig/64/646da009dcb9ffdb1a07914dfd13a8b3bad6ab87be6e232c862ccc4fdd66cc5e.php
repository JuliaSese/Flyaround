<?php

/* :planemodel:index.html.twig */
class __TwigTemplate_fd17fbba2c808a50dffd55b409addb0cfb35ca3fd377b0d9374a9b2e2dfb4a8c extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", ":planemodel:index.html.twig", 1);
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
        $__internal_997731ffe031b96ad5457fb3a1eb96b4014b10fae4f71568ded405ec1143b4ab = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_997731ffe031b96ad5457fb3a1eb96b4014b10fae4f71568ded405ec1143b4ab->enter($__internal_997731ffe031b96ad5457fb3a1eb96b4014b10fae4f71568ded405ec1143b4ab_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":planemodel:index.html.twig"));

        $__internal_a5c3c5b80a9d94ed34caa79a16d882ad5796fe27dae225321c1b19d183f30e26 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a5c3c5b80a9d94ed34caa79a16d882ad5796fe27dae225321c1b19d183f30e26->enter($__internal_a5c3c5b80a9d94ed34caa79a16d882ad5796fe27dae225321c1b19d183f30e26_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":planemodel:index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_997731ffe031b96ad5457fb3a1eb96b4014b10fae4f71568ded405ec1143b4ab->leave($__internal_997731ffe031b96ad5457fb3a1eb96b4014b10fae4f71568ded405ec1143b4ab_prof);

        
        $__internal_a5c3c5b80a9d94ed34caa79a16d882ad5796fe27dae225321c1b19d183f30e26->leave($__internal_a5c3c5b80a9d94ed34caa79a16d882ad5796fe27dae225321c1b19d183f30e26_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_a19cad850497ed3e3ef1d33c77d603b400f8e8c36a3ae461b30b1e65f92a276f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a19cad850497ed3e3ef1d33c77d603b400f8e8c36a3ae461b30b1e65f92a276f->enter($__internal_a19cad850497ed3e3ef1d33c77d603b400f8e8c36a3ae461b30b1e65f92a276f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_063c46d01053b14978080fd0e13c00dd733e7b848f6cfc6afb9b877658a9848d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_063c46d01053b14978080fd0e13c00dd733e7b848f6cfc6afb9b877658a9848d->enter($__internal_063c46d01053b14978080fd0e13c00dd733e7b848f6cfc6afb9b877658a9848d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        $context['_seq'] = twig_ensure_traversable(($context["planeModels"] ?? $this->getContext($context, "planeModels")));
        foreach ($context['_seq'] as $context["_key"] => $context["planeModel"]) {
            // line 20
            echo "            <tr>
                <td><a href=\"";
            // line 21
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("planemodel_show", array("id" => $this->getAttribute($context["planeModel"], "id", array()))), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute($context["planeModel"], "id", array()), "html", null, true);
            echo "</a></td>
                <td>";
            // line 22
            echo twig_escape_filter($this->env, $this->getAttribute($context["planeModel"], "model", array()), "html", null, true);
            echo "</td>
                <td>";
            // line 23
            echo twig_escape_filter($this->env, $this->getAttribute($context["planeModel"], "manufacturer", array()), "html", null, true);
            echo "</td>
                <td>";
            // line 24
            echo twig_escape_filter($this->env, $this->getAttribute($context["planeModel"], "cruiseSpeed", array()), "html", null, true);
            echo "</td>
                <td>";
            // line 25
            echo twig_escape_filter($this->env, $this->getAttribute($context["planeModel"], "planeNbSeats", array()), "html", null, true);
            echo "</td>
                <td>";
            // line 26
            if ($this->getAttribute($context["planeModel"], "isAvailable", array())) {
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
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("planemodel_show", array("id" => $this->getAttribute($context["planeModel"], "id", array()))), "html", null, true);
            echo "\">show</a>
                        </li>
                        <li>
                            <a href=\"";
            // line 33
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("planemodel_edit", array("id" => $this->getAttribute($context["planeModel"], "id", array()))), "html", null, true);
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
        
        $__internal_063c46d01053b14978080fd0e13c00dd733e7b848f6cfc6afb9b877658a9848d->leave($__internal_063c46d01053b14978080fd0e13c00dd733e7b848f6cfc6afb9b877658a9848d_prof);

        
        $__internal_a19cad850497ed3e3ef1d33c77d603b400f8e8c36a3ae461b30b1e65f92a276f->leave($__internal_a19cad850497ed3e3ef1d33c77d603b400f8e8c36a3ae461b30b1e65f92a276f_prof);

    }

    public function getTemplateName()
    {
        return ":planemodel:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  131 => 44,  124 => 39,  112 => 33,  106 => 30,  95 => 26,  91 => 25,  87 => 24,  83 => 23,  79 => 22,  73 => 21,  70 => 20,  66 => 19,  49 => 4,  40 => 3,  11 => 1,);
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
", ":planemodel:index.html.twig", "/var/www/html/flyaround/app/Resources/views/planemodel/index.html.twig");
    }
}
