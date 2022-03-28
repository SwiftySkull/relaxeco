<?php

use Twig\Environment;
use Twig\Error\LoaderError;
use Twig\Error\RuntimeError;
use Twig\Extension\SandboxExtension;
use Twig\Markup;
use Twig\Sandbox\SecurityError;
use Twig\Sandbox\SecurityNotAllowedTagError;
use Twig\Sandbox\SecurityNotAllowedFilterError;
use Twig\Sandbox\SecurityNotAllowedFunctionError;
use Twig\Source;
use Twig\Template;

/* seances/index.html.twig */
class __TwigTemplate_3d14f2765063da7e3fe59aa90e1d90b9cce3d0c6d9763eb6233fd46af5d7e559 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'title' => [$this, 'block_title'],
            'seancesActive' => [$this, 'block_seancesActive'],
            'body' => [$this, 'block_body'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 1
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "seances/index.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "seances/index.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 3
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        echo "Hello SeancesController!";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 5
    public function block_seancesActive($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "seancesActive"));

        echo "active";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 7
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 8
        echo "<style>
    .example-wrapper { margin: 1em auto; max-width: 100%; width: 95%; font: 18px/1.5 sans-serif; }
    .example-wrapper code { background: #F5F5F5; padding: 2px 6px; }
</style>

<div class=\"example-wrapper\">
    <h1 style=\"margin-bottom: 2rem\">Liste des séances</h1>

    <form action=\"";
        // line 16
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("seances_add");
        echo "\" style=\"margin-bottom: 3rem\" method=\"POST\">
        <input type=\"hidden\" name=\"token\" value=\"";
        // line 17
        echo twig_escape_filter($this->env, $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderCsrfToken("add-edit-item"), "html", null, true);
        echo "\"/>
        <button class=\"btn btn-success\">Ajouter une séance</button>
    </form>

    <div style=\"display: flex; justify-content: space-evenly; border-bottom: 1px solid black; margin: 1rem 0\">
        <p style=\"width: 5%\">#</p>
        <p style=\"width: 30%\">Nom</p>
        <p style=\"width: 10%\">Durée</p>
        <p style=\"width: 10%\">Prix</p>
        <p style=\"width: 20%\">Catégorie</p>
        <p style=\"width: 30%; margin-left: 4rem;\">Actions</p>
    </div>
    <div>
        ";
        // line 30
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["seances"]) || array_key_exists("seances", $context) ? $context["seances"] : (function () { throw new RuntimeError('Variable "seances" does not exist.', 30, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["sea"]) {
            // line 31
            echo "            <div style=\"display: flex; justify-content: space-evenly; border-bottom: 1px solid black; margin-bottom: 1rem; padding-bottom: 1rem\">
                <p style=\"width: 5%\">";
            // line 32
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["sea"], "id", [], "any", false, false, false, 32), "html", null, true);
            echo "</p>
                <p style=\"width: 30%\">";
            // line 33
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["sea"], "title", [], "any", false, false, false, 33), "html", null, true);
            echo "</p>
                <p style=\"width: 10%\">";
            // line 34
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["sea"], "duration", [], "any", false, false, false, 34), "html", null, true);
            echo "min</p>
                <p style=\"width: 10%\">";
            // line 35
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["sea"], "price", [], "any", false, false, false, 35), "html", null, true);
            echo "€</p>
                <p style=\"width: 20%\">";
            // line 36
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["sea"], "population", [], "any", false, false, false, 36), "title", [], "any", false, false, false, 36), "html", null, true);
            echo "</p>
                <div style=\"width: 30%; margin-left: 4rem; display:flex\">
                    <div style=\"position: relative; margin-right: 1rem\">
                        <form action=\"";
            // line 39
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("seances_display", ["id" => twig_get_attribute($this->env, $this->source, $context["sea"], "id", [], "any", false, false, false, 39)]), "html", null, true);
            echo "\" method=\"POST\">
                            <input type=\"hidden\" name=\"token\" value=\"";
            // line 40
            echo twig_escape_filter($this->env, $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderCsrfToken("display-item"), "html", null, true);
            echo "\"/>
                            ";
            // line 41
            if ((twig_get_attribute($this->env, $this->source, $context["sea"], "displayOnWebsite", [], "any", false, false, false, 41) === true)) {
                // line 42
                echo "                                <button class=\"btn btn-secondary\">Enlever du site</button>
                            ";
            } elseif ((twig_get_attribute($this->env, $this->source,             // line 43
$context["sea"], "displayOnWebsite", [], "any", false, false, false, 43) === false)) {
                // line 44
                echo "                                <button class=\"btn btn-primary\">Ajouter au site</button>
                            ";
            }
            // line 46
            echo "                        </form>
                        ";
            // line 47
            if ((twig_get_attribute($this->env, $this->source, $context["sea"], "displayable", [], "any", false, false, false, 47) === false)) {
                // line 48
                echo "                            <div style=\"height: 100%; width: 100%; overflow: hidden; position: absolute; top: 0;\">
                                <div style=\"position: absolute; height: 10px; width: 200%; background-color: red; top: 50%; left: -50%; transform: rotate(25deg); z-index: 5\"></div>
                                <div style=\"height: 100%; width: 100%; position: absolute; top: 0; left: 0; background-color: rgba(0, 0, 0, 0.6); border-radius: 5px;\"></div>
                            </div>
                        ";
            }
            // line 53
            echo "                    </div>
                    <form action=\"";
            // line 54
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("seances_edit", ["id" => twig_get_attribute($this->env, $this->source, $context["sea"], "id", [], "any", false, false, false, 54)]), "html", null, true);
            echo "\" style=\"margin-right: 1rem\" method=\"POST\">
                        <input type=\"hidden\" name=\"token\" value=\"";
            // line 55
            echo twig_escape_filter($this->env, $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderCsrfToken("add-edit-item"), "html", null, true);
            echo "\"/>
                        <button class=\"btn btn-warning\">Modifier</button>
                    </form>
                    <form action=\"";
            // line 58
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("seances_delete", ["id" => twig_get_attribute($this->env, $this->source, $context["sea"], "id", [], "any", false, false, false, 58)]), "html", null, true);
            echo "\" onsubmit=\"return confirm('Supprimer séance ";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["sea"], "title", [], "any", false, false, false, 58), "html", null, true);
            echo " ?')\" method=\"POST\">
                        <input type=\"hidden\" name=\"token\" value=\"";
            // line 59
            echo twig_escape_filter($this->env, $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderCsrfToken("delete-item"), "html", null, true);
            echo "\"/>
                        <button type=\"submit\" class=\"btn btn-danger\">Supprimer</button>
                    </form>
                </div>
            </div>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['sea'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 65
        echo "    </div>
</div>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "seances/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  208 => 65,  196 => 59,  190 => 58,  184 => 55,  180 => 54,  177 => 53,  170 => 48,  168 => 47,  165 => 46,  161 => 44,  159 => 43,  156 => 42,  154 => 41,  150 => 40,  146 => 39,  140 => 36,  136 => 35,  132 => 34,  128 => 33,  124 => 32,  121 => 31,  117 => 30,  101 => 17,  97 => 16,  87 => 8,  80 => 7,  67 => 5,  54 => 3,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Hello SeancesController!{% endblock %}

{% block seancesActive %}active{% endblock %}

{% block body %}
<style>
    .example-wrapper { margin: 1em auto; max-width: 100%; width: 95%; font: 18px/1.5 sans-serif; }
    .example-wrapper code { background: #F5F5F5; padding: 2px 6px; }
</style>

<div class=\"example-wrapper\">
    <h1 style=\"margin-bottom: 2rem\">Liste des séances</h1>

    <form action=\"{{ path('seances_add') }}\" style=\"margin-bottom: 3rem\" method=\"POST\">
        <input type=\"hidden\" name=\"token\" value=\"{{ csrf_token('add-edit-item') }}\"/>
        <button class=\"btn btn-success\">Ajouter une séance</button>
    </form>

    <div style=\"display: flex; justify-content: space-evenly; border-bottom: 1px solid black; margin: 1rem 0\">
        <p style=\"width: 5%\">#</p>
        <p style=\"width: 30%\">Nom</p>
        <p style=\"width: 10%\">Durée</p>
        <p style=\"width: 10%\">Prix</p>
        <p style=\"width: 20%\">Catégorie</p>
        <p style=\"width: 30%; margin-left: 4rem;\">Actions</p>
    </div>
    <div>
        {% for sea in seances %}
            <div style=\"display: flex; justify-content: space-evenly; border-bottom: 1px solid black; margin-bottom: 1rem; padding-bottom: 1rem\">
                <p style=\"width: 5%\">{{ sea.id }}</p>
                <p style=\"width: 30%\">{{ sea.title }}</p>
                <p style=\"width: 10%\">{{ sea.duration }}min</p>
                <p style=\"width: 10%\">{{ sea.price }}€</p>
                <p style=\"width: 20%\">{{ sea.population.title }}</p>
                <div style=\"width: 30%; margin-left: 4rem; display:flex\">
                    <div style=\"position: relative; margin-right: 1rem\">
                        <form action=\"{{ path('seances_display', {id: sea.id}) }}\" method=\"POST\">
                            <input type=\"hidden\" name=\"token\" value=\"{{ csrf_token('display-item') }}\"/>
                            {% if sea.displayOnWebsite is same as true %}
                                <button class=\"btn btn-secondary\">Enlever du site</button>
                            {% elseif sea.displayOnWebsite is same as false %}
                                <button class=\"btn btn-primary\">Ajouter au site</button>
                            {% endif %}
                        </form>
                        {% if sea.displayable is same as false %}
                            <div style=\"height: 100%; width: 100%; overflow: hidden; position: absolute; top: 0;\">
                                <div style=\"position: absolute; height: 10px; width: 200%; background-color: red; top: 50%; left: -50%; transform: rotate(25deg); z-index: 5\"></div>
                                <div style=\"height: 100%; width: 100%; position: absolute; top: 0; left: 0; background-color: rgba(0, 0, 0, 0.6); border-radius: 5px;\"></div>
                            </div>
                        {% endif %}
                    </div>
                    <form action=\"{{ path('seances_edit', {id: sea.id}) }}\" style=\"margin-right: 1rem\" method=\"POST\">
                        <input type=\"hidden\" name=\"token\" value=\"{{ csrf_token('add-edit-item') }}\"/>
                        <button class=\"btn btn-warning\">Modifier</button>
                    </form>
                    <form action=\"{{ path('seances_delete', {id: sea.id}) }}\" onsubmit=\"return confirm('Supprimer séance {{ sea.title }} ?')\" method=\"POST\">
                        <input type=\"hidden\" name=\"token\" value=\"{{ csrf_token('delete-item') }}\"/>
                        <button type=\"submit\" class=\"btn btn-danger\">Supprimer</button>
                    </form>
                </div>
            </div>
        {% endfor %}
    </div>
</div>
{% endblock %}
", "seances/index.html.twig", "C:\\Users\\Utilisateur\\Desktop\\Projets\\Relax&Co\\Back\\templates\\seances\\index.html.twig");
    }
}
