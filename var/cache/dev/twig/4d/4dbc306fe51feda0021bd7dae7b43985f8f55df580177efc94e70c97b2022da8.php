<?php

/* review/index.html.twig */
class __TwigTemplate_c7f7bb42f5d5e3971472b4284f9f0a2bbfb3ec7e58279a73f7497e41d60741a0 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "review/index.html.twig", 1);
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
        $__internal_00f0f7a094ec45ee9310080da0a42209c2a432804a5891962188c435dc95125a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_00f0f7a094ec45ee9310080da0a42209c2a432804a5891962188c435dc95125a->enter($__internal_00f0f7a094ec45ee9310080da0a42209c2a432804a5891962188c435dc95125a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "review/index.html.twig"));

        $__internal_77dbfb78021de1cfa7daa583daef24143f30ac593c148af5c85907a427409c9a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_77dbfb78021de1cfa7daa583daef24143f30ac593c148af5c85907a427409c9a->enter($__internal_77dbfb78021de1cfa7daa583daef24143f30ac593c148af5c85907a427409c9a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "review/index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_00f0f7a094ec45ee9310080da0a42209c2a432804a5891962188c435dc95125a->leave($__internal_00f0f7a094ec45ee9310080da0a42209c2a432804a5891962188c435dc95125a_prof);

        
        $__internal_77dbfb78021de1cfa7daa583daef24143f30ac593c148af5c85907a427409c9a->leave($__internal_77dbfb78021de1cfa7daa583daef24143f30ac593c148af5c85907a427409c9a_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_da879018b607b0e618194b3b24235fe02ff164cfd74fd192da68d356db85aaa9 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_da879018b607b0e618194b3b24235fe02ff164cfd74fd192da68d356db85aaa9->enter($__internal_da879018b607b0e618194b3b24235fe02ff164cfd74fd192da68d356db85aaa9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_2b9f0f0344a8f040426d45318b96fec9952d78da9ef594bd7f99b375c6a72547 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2b9f0f0344a8f040426d45318b96fec9952d78da9ef594bd7f99b375c6a72547->enter($__internal_2b9f0f0344a8f040426d45318b96fec9952d78da9ef594bd7f99b375c6a72547_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    <h1>Reviews list</h1>

    <table>
        <thead>
            <tr>
                <th>Id</th>
                <th>Text</th>
                <th>Userrated</th>
                <th>Publicationdate</th>
                <th>Note</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
        ";
        // line 18
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["reviews"]) || array_key_exists("reviews", $context) ? $context["reviews"] : (function () { throw new Twig_Error_Runtime('Variable "reviews" does not exist.', 18, $this->getSourceContext()); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["review"]) {
            // line 19
            echo "            <tr>
                <td><a href=\"";
            // line 20
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("review_show", array("id" => twig_get_attribute($this->env, $this->getSourceContext(), $context["review"], "id", array()))), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["review"], "id", array()), "html", null, true);
            echo "</a></td>
                <td>";
            // line 21
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["review"], "text", array()), "html", null, true);
            echo "</td>
                <td>";
            // line 22
            if (twig_get_attribute($this->env, $this->getSourceContext(), $context["review"], "publicationDate", array())) {
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["review"], "publicationDate", array()), "Y-m-d H:i:s"), "html", null, true);
            }
            echo "</td>
                <td>";
            // line 23
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["review"], "note", array()), "html", null, true);
            echo "</td>
                <td>
                    <ul>
                        <li>
                            <a href=\"";
            // line 27
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("review_show", array("id" => twig_get_attribute($this->env, $this->getSourceContext(), $context["review"], "id", array()))), "html", null, true);
            echo "\">show</a>
                        </li>
                        <li>
                            <a href=\"";
            // line 30
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("review_edit", array("id" => twig_get_attribute($this->env, $this->getSourceContext(), $context["review"], "id", array()))), "html", null, true);
            echo "\">edit</a>
                        </li>
                    </ul>
                </td>
            </tr>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['review'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 36
        echo "        </tbody>
    </table>

    <ul>
        <li>
            <a href=\"";
        // line 41
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("review_new");
        echo "\">Create a new review</a>
        </li>
    </ul>
";
        
        $__internal_2b9f0f0344a8f040426d45318b96fec9952d78da9ef594bd7f99b375c6a72547->leave($__internal_2b9f0f0344a8f040426d45318b96fec9952d78da9ef594bd7f99b375c6a72547_prof);

        
        $__internal_da879018b607b0e618194b3b24235fe02ff164cfd74fd192da68d356db85aaa9->leave($__internal_da879018b607b0e618194b3b24235fe02ff164cfd74fd192da68d356db85aaa9_prof);

    }

    public function getTemplateName()
    {
        return "review/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  120 => 41,  113 => 36,  101 => 30,  95 => 27,  88 => 23,  82 => 22,  78 => 21,  72 => 20,  69 => 19,  65 => 18,  49 => 4,  40 => 3,  11 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends 'base.html.twig' %}

{% block body %}
    <h1>Reviews list</h1>

    <table>
        <thead>
            <tr>
                <th>Id</th>
                <th>Text</th>
                <th>Userrated</th>
                <th>Publicationdate</th>
                <th>Note</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
        {% for review in reviews %}
            <tr>
                <td><a href=\"{{ path('review_show', { 'id': review.id }) }}\">{{ review.id }}</a></td>
                <td>{{ review.text }}</td>
                <td>{% if review.publicationDate %}{{ review.publicationDate|date('Y-m-d H:i:s') }}{% endif %}</td>
                <td>{{ review.note }}</td>
                <td>
                    <ul>
                        <li>
                            <a href=\"{{ path('review_show', { 'id': review.id }) }}\">show</a>
                        </li>
                        <li>
                            <a href=\"{{ path('review_edit', { 'id': review.id }) }}\">edit</a>
                        </li>
                    </ul>
                </td>
            </tr>
        {% endfor %}
        </tbody>
    </table>

    <ul>
        <li>
            <a href=\"{{ path('review_new') }}\">Create a new review</a>
        </li>
    </ul>
{% endblock %}
", "review/index.html.twig", "/var/www/html/flyaround/app/Resources/views/review/index.html.twig");
    }
}
