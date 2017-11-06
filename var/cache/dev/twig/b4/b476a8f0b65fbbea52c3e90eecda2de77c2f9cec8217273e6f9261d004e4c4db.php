<?php

/* reservation/show.html.twig */
class __TwigTemplate_49c0379a28105c6db2f58efa54c69835b8a85797208f49758d300de44b11949c extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "reservation/show.html.twig", 1);
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
        $__internal_425d0062b2c25b24299b63289b381928203eb2569d2930624d3af51918617f9b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_425d0062b2c25b24299b63289b381928203eb2569d2930624d3af51918617f9b->enter($__internal_425d0062b2c25b24299b63289b381928203eb2569d2930624d3af51918617f9b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "reservation/show.html.twig"));

        $__internal_29f5d685f75326457a9f2894e0c6e19d5aeb3a47aa188162af4b4609ee69e546 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_29f5d685f75326457a9f2894e0c6e19d5aeb3a47aa188162af4b4609ee69e546->enter($__internal_29f5d685f75326457a9f2894e0c6e19d5aeb3a47aa188162af4b4609ee69e546_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "reservation/show.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_425d0062b2c25b24299b63289b381928203eb2569d2930624d3af51918617f9b->leave($__internal_425d0062b2c25b24299b63289b381928203eb2569d2930624d3af51918617f9b_prof);

        
        $__internal_29f5d685f75326457a9f2894e0c6e19d5aeb3a47aa188162af4b4609ee69e546->leave($__internal_29f5d685f75326457a9f2894e0c6e19d5aeb3a47aa188162af4b4609ee69e546_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_3905da9c1457512ad1d0e9ab10ebd6df5398503375ec5e2b921bcd15b4cbc269 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3905da9c1457512ad1d0e9ab10ebd6df5398503375ec5e2b921bcd15b4cbc269->enter($__internal_3905da9c1457512ad1d0e9ab10ebd6df5398503375ec5e2b921bcd15b4cbc269_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_d0e0de5b4a90491ec2feb1f099b2a9ac664f037359bafc1c34ab1a3483f6659c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d0e0de5b4a90491ec2feb1f099b2a9ac664f037359bafc1c34ab1a3483f6659c->enter($__internal_d0e0de5b4a90491ec2feb1f099b2a9ac664f037359bafc1c34ab1a3483f6659c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    <h1>Reservation</h1>

    <table>
        <tbody>
            <tr>
                <th>Id</th>
                <td>";
        // line 10
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["reservation"]) || array_key_exists("reservation", $context) ? $context["reservation"] : (function () { throw new Twig_Error_Runtime('Variable "reservation" does not exist.', 10, $this->getSourceContext()); })()), "id", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Nbreservedseats</th>
                <td>";
        // line 14
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["reservation"]) || array_key_exists("reservation", $context) ? $context["reservation"] : (function () { throw new Twig_Error_Runtime('Variable "reservation" does not exist.', 14, $this->getSourceContext()); })()), "nbReservedSeats", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Publicationdate</th>
                <td>";
        // line 18
        if (twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["reservation"]) || array_key_exists("reservation", $context) ? $context["reservation"] : (function () { throw new Twig_Error_Runtime('Variable "reservation" does not exist.', 18, $this->getSourceContext()); })()), "publicationDate", array())) {
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["reservation"]) || array_key_exists("reservation", $context) ? $context["reservation"] : (function () { throw new Twig_Error_Runtime('Variable "reservation" does not exist.', 18, $this->getSourceContext()); })()), "publicationDate", array()), "Y-m-d H:i:s"), "html", null, true);
        }
        echo "</td>
            </tr>
            <tr>
                <th>Passenger</th>
                <td>";
        // line 22
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->getSourceContext(), $context["reservation"], "passenger", array()));
        foreach ($context['_seq'] as $context["_key"] => $context["reservation"]) {
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["reservation"], "userName", array()), "html", null, true);
            echo " ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['reservation'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        echo "</td>
            </tr>
            <tr>
                <th>Flight</th>
                <td>";
        // line 26
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["reservation"]) || array_key_exists("reservation", $context) ? $context["reservation"] : (function () { throw new Twig_Error_Runtime('Variable "reservation" does not exist.', 26, $this->getSourceContext()); })()), "flight", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Wasdone</th>
                <td>";
        // line 30
        if (twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["reservation"]) || array_key_exists("reservation", $context) ? $context["reservation"] : (function () { throw new Twig_Error_Runtime('Variable "reservation" does not exist.', 30, $this->getSourceContext()); })()), "wasDone", array())) {
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
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("reservation_index");
        echo "\">Back to the list</a>
        </li>
        <li>
            <a href=\"";
        // line 40
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("reservation_edit", array("id" => twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["reservation"]) || array_key_exists("reservation", $context) ? $context["reservation"] : (function () { throw new Twig_Error_Runtime('Variable "reservation" does not exist.', 40, $this->getSourceContext()); })()), "id", array()))), "html", null, true);
        echo "\">Edit</a>
        </li>
        <li>
            ";
        // line 43
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock((isset($context["delete_form"]) || array_key_exists("delete_form", $context) ? $context["delete_form"] : (function () { throw new Twig_Error_Runtime('Variable "delete_form" does not exist.', 43, $this->getSourceContext()); })()), 'form_start');
        echo "
                <input type=\"submit\" value=\"Delete\">
            ";
        // line 45
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock((isset($context["delete_form"]) || array_key_exists("delete_form", $context) ? $context["delete_form"] : (function () { throw new Twig_Error_Runtime('Variable "delete_form" does not exist.', 45, $this->getSourceContext()); })()), 'form_end');
        echo "
        </li>
    </ul>
";
        
        $__internal_d0e0de5b4a90491ec2feb1f099b2a9ac664f037359bafc1c34ab1a3483f6659c->leave($__internal_d0e0de5b4a90491ec2feb1f099b2a9ac664f037359bafc1c34ab1a3483f6659c_prof);

        
        $__internal_3905da9c1457512ad1d0e9ab10ebd6df5398503375ec5e2b921bcd15b4cbc269->leave($__internal_3905da9c1457512ad1d0e9ab10ebd6df5398503375ec5e2b921bcd15b4cbc269_prof);

    }

    public function getTemplateName()
    {
        return "reservation/show.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  133 => 45,  128 => 43,  122 => 40,  116 => 37,  102 => 30,  95 => 26,  80 => 22,  71 => 18,  64 => 14,  57 => 10,  49 => 4,  40 => 3,  11 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends 'base.html.twig' %}

{% block body %}
    <h1>Reservation</h1>

    <table>
        <tbody>
            <tr>
                <th>Id</th>
                <td>{{ reservation.id }}</td>
            </tr>
            <tr>
                <th>Nbreservedseats</th>
                <td>{{ reservation.nbReservedSeats }}</td>
            </tr>
            <tr>
                <th>Publicationdate</th>
                <td>{% if reservation.publicationDate %}{{ reservation.publicationDate|date('Y-m-d H:i:s') }}{% endif %}</td>
            </tr>
            <tr>
                <th>Passenger</th>
                <td>{%for reservation in reservation.passenger %}{{reservation.userName}} {%endfor%}</td>
            </tr>
            <tr>
                <th>Flight</th>
                <td>{{ reservation.flight }}</td>
            </tr>
            <tr>
                <th>Wasdone</th>
                <td>{% if reservation.wasDone %}Yes{% else %}No{% endif %}</td>
            </tr>
        </tbody>
    </table>

    <ul>
        <li>
            <a href=\"{{ path('reservation_index') }}\">Back to the list</a>
        </li>
        <li>
            <a href=\"{{ path('reservation_edit', { 'id': reservation.id }) }}\">Edit</a>
        </li>
        <li>
            {{ form_start(delete_form) }}
                <input type=\"submit\" value=\"Delete\">
            {{ form_end(delete_form) }}
        </li>
    </ul>
{% endblock %}
", "reservation/show.html.twig", "/var/www/html/flyaround/app/Resources/views/reservation/show.html.twig");
    }
}
