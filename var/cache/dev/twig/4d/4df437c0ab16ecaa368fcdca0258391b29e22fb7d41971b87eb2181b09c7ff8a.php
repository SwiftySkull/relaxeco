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

/* quotes/index.html.twig */
class __TwigTemplate_5e491fff3c36c770efff1eb1d1eaef17ef41cc23dcd44e29f0d962e9a380dca0 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'title' => [$this, 'block_title'],
            'quotesActive' => [$this, 'block_quotesActive'],
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
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "quotes/index.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "quotes/index.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 3
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        echo "Hello QuotesController!";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 5
    public function block_quotesActive($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "quotesActive"));

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
    <h1 style=\"margin-bottom: 2rem\">Liste des Citations</h1>

    <form action=\"";
        // line 16
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("quotes_add");
        echo "\" style=\"margin-bottom: 3rem\" method=\"POST\">
        <input type=\"hidden\" name=\"token\" value=\"";
        // line 17
        echo twig_escape_filter($this->env, $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderCsrfToken("add-edit-item"), "html", null, true);
        echo "\"/>
        <button class=\"btn btn-success\">Ajouter une citation</button>
    </form>

    <div style=\"display: flex; justify-content: space-evenly; border-bottom: 1px solid black; margin: 1rem 0\">
        <p style=\"width: 5%\">#</p>
        <p style=\"width: 15%\">Autrice/Auteur</p>
        <p style=\"width: 40%; margin-left: 1rem\">Citation</p>
        <p style=\"width: 10%\">Affichage</p>
        <p style=\"width: 30%; margin-left: 4rem; text-align: center\">Actions</p>
    </div>
    <div>
        ";
        // line 29
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["quotes"]) || array_key_exists("quotes", $context) ? $context["quotes"] : (function () { throw new RuntimeError('Variable "quotes" does not exist.', 29, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["quo"]) {
            // line 30
            echo "            <div style=\"display: flex; justify-content: space-evenly; border-bottom: 1px solid black; margin-bottom: 1rem; padding-bottom: 1rem\">
                <p style=\"width: 5%\">";
            // line 31
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["quo"], "id", [], "any", false, false, false, 31), "html", null, true);
            echo "</p>
                <a href=\"";
            // line 32
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("quotes_read", ["id" => twig_get_attribute($this->env, $this->source, $context["quo"], "id", [], "any", false, false, false, 32)]), "html", null, true);
            echo "\" style=\"width: 15%\">";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["quo"], "author", [], "any", false, false, false, 32), "html", null, true);
            echo "</a>
                <p style=\"width: 40%; margin-left: 1rem\">";
            // line 33
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["quo"], "content", [], "any", false, false, false, 33), "html", null, true);
            echo "</p>
                ";
            // line 34
            if ((twig_get_attribute($this->env, $this->source, $context["quo"], "displayOnWebsite", [], "any", false, false, false, 34) === true)) {
                // line 35
                echo "                    <p style=\"color: green; width: 10%\">Affiché</p>
                ";
            } elseif ((twig_get_attribute($this->env, $this->source,             // line 36
$context["quo"], "displayOnWebsite", [], "any", false, false, false, 36) === false)) {
                // line 37
                echo "                    <p style=\"color: red; width: 10%\">Caché</p>
                ";
            }
            // line 39
            echo "                <div style=\"width: 30%; margin-left: 4rem; display:flex\">
                    <div style=\"position: relative; margin-right: 1rem\">
                        <form action=\"";
            // line 41
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("quotes_display", ["id" => twig_get_attribute($this->env, $this->source, $context["quo"], "id", [], "any", false, false, false, 41)]), "html", null, true);
            echo "\" method=\"POST\">
                            <input type=\"hidden\" name=\"token\" value=\"";
            // line 42
            echo twig_escape_filter($this->env, $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderCsrfToken("display-item"), "html", null, true);
            echo "\"/>
                            ";
            // line 43
            if ((twig_get_attribute($this->env, $this->source, $context["quo"], "displayOnWebsite", [], "any", false, false, false, 43) === true)) {
                // line 44
                echo "                                <button class=\"btn btn-secondary\">Enlever du site</button>
                            ";
            } elseif ((twig_get_attribute($this->env, $this->source,             // line 45
$context["quo"], "displayOnWebsite", [], "any", false, false, false, 45) === false)) {
                // line 46
                echo "                                <button class=\"btn btn-primary\">Ajouter au site</button>
                            ";
            }
            // line 48
            echo "                        </form>
                        ";
            // line 49
            if ((twig_get_attribute($this->env, $this->source, $context["quo"], "displayable", [], "any", false, false, false, 49) === false)) {
                // line 50
                echo "                            <div style=\"height: 100%; width: 100%; overflow: hidden; position: absolute; top: 0;\">
                                <div style=\"position: absolute; height: 10px; width: 200%; background-color: red; top: 50%; left: -50%; transform: rotate(25deg); z-index: 5\"></div>
                                <div style=\"height: 100%; width: 100%; position: absolute; top: 0; left: 0; background-color: rgba(0, 0, 0, 0.6); border-radius: 5px;\"></div>
                            </div>
                        ";
            }
            // line 55
            echo "                    </div>
                    <form action=\"";
            // line 56
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("quotes_edit", ["id" => twig_get_attribute($this->env, $this->source, $context["quo"], "id", [], "any", false, false, false, 56)]), "html", null, true);
            echo "\" style=\"margin-right: 1rem\" method=\"POST\">
                        <input type=\"hidden\" name=\"token\" value=\"";
            // line 57
            echo twig_escape_filter($this->env, $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderCsrfToken("add-edit-item"), "html", null, true);
            echo "\"/>
                        <button class=\"btn btn-warning\">Modifier</button>
                    </form>
                    <form action=\"";
            // line 60
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("quotes_delete", ["id" => twig_get_attribute($this->env, $this->source, $context["quo"], "id", [], "any", false, false, false, 60)]), "html", null, true);
            echo "\" onsubmit=\"return confirm('Supprimer Citation de ";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["quo"], "author", [], "any", false, false, false, 60), "html", null, true);
            echo " ?')\" method=\"POST\">
                        <input type=\"hidden\" name=\"token\" value=\"";
            // line 61
            echo twig_escape_filter($this->env, $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderCsrfToken("delete-item"), "html", null, true);
            echo "\"/>
                        <button type=\"submit\" class=\"btn btn-danger\">Supprimer</button>
                    </form>
                </div>
            </div>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['quo'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 67
        echo "    </div>
</div>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "quotes/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  214 => 67,  202 => 61,  196 => 60,  190 => 57,  186 => 56,  183 => 55,  176 => 50,  174 => 49,  171 => 48,  167 => 46,  165 => 45,  162 => 44,  160 => 43,  156 => 42,  152 => 41,  148 => 39,  144 => 37,  142 => 36,  139 => 35,  137 => 34,  133 => 33,  127 => 32,  123 => 31,  120 => 30,  116 => 29,  101 => 17,  97 => 16,  87 => 8,  80 => 7,  67 => 5,  54 => 3,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Hello QuotesController!{% endblock %}

{% block quotesActive %}active{% endblock %}

{% block body %}
<style>
    .example-wrapper { margin: 1em auto; max-width: 100%; width: 95%; font: 18px/1.5 sans-serif; }
    .example-wrapper code { background: #F5F5F5; padding: 2px 6px; }
</style>

<div class=\"example-wrapper\">
    <h1 style=\"margin-bottom: 2rem\">Liste des Citations</h1>

    <form action=\"{{ path('quotes_add') }}\" style=\"margin-bottom: 3rem\" method=\"POST\">
        <input type=\"hidden\" name=\"token\" value=\"{{ csrf_token('add-edit-item') }}\"/>
        <button class=\"btn btn-success\">Ajouter une citation</button>
    </form>

    <div style=\"display: flex; justify-content: space-evenly; border-bottom: 1px solid black; margin: 1rem 0\">
        <p style=\"width: 5%\">#</p>
        <p style=\"width: 15%\">Autrice/Auteur</p>
        <p style=\"width: 40%; margin-left: 1rem\">Citation</p>
        <p style=\"width: 10%\">Affichage</p>
        <p style=\"width: 30%; margin-left: 4rem; text-align: center\">Actions</p>
    </div>
    <div>
        {% for quo in quotes %}
            <div style=\"display: flex; justify-content: space-evenly; border-bottom: 1px solid black; margin-bottom: 1rem; padding-bottom: 1rem\">
                <p style=\"width: 5%\">{{ quo.id }}</p>
                <a href=\"{{ path('quotes_read', {id: quo.id}) }}\" style=\"width: 15%\">{{ quo.author }}</a>
                <p style=\"width: 40%; margin-left: 1rem\">{{ quo.content }}</p>
                {% if quo.displayOnWebsite is same as true %}
                    <p style=\"color: green; width: 10%\">Affiché</p>
                {% elseif quo.displayOnWebsite is same as false %}
                    <p style=\"color: red; width: 10%\">Caché</p>
                {% endif %}
                <div style=\"width: 30%; margin-left: 4rem; display:flex\">
                    <div style=\"position: relative; margin-right: 1rem\">
                        <form action=\"{{ path('quotes_display', {id: quo.id}) }}\" method=\"POST\">
                            <input type=\"hidden\" name=\"token\" value=\"{{ csrf_token('display-item') }}\"/>
                            {% if quo.displayOnWebsite is same as true %}
                                <button class=\"btn btn-secondary\">Enlever du site</button>
                            {% elseif quo.displayOnWebsite is same as false %}
                                <button class=\"btn btn-primary\">Ajouter au site</button>
                            {% endif %}
                        </form>
                        {% if quo.displayable is same as false %}
                            <div style=\"height: 100%; width: 100%; overflow: hidden; position: absolute; top: 0;\">
                                <div style=\"position: absolute; height: 10px; width: 200%; background-color: red; top: 50%; left: -50%; transform: rotate(25deg); z-index: 5\"></div>
                                <div style=\"height: 100%; width: 100%; position: absolute; top: 0; left: 0; background-color: rgba(0, 0, 0, 0.6); border-radius: 5px;\"></div>
                            </div>
                        {% endif %}
                    </div>
                    <form action=\"{{ path('quotes_edit', {id: quo.id}) }}\" style=\"margin-right: 1rem\" method=\"POST\">
                        <input type=\"hidden\" name=\"token\" value=\"{{ csrf_token('add-edit-item') }}\"/>
                        <button class=\"btn btn-warning\">Modifier</button>
                    </form>
                    <form action=\"{{ path('quotes_delete', {id: quo.id}) }}\" onsubmit=\"return confirm('Supprimer Citation de {{ quo.author }} ?')\" method=\"POST\">
                        <input type=\"hidden\" name=\"token\" value=\"{{ csrf_token('delete-item') }}\"/>
                        <button type=\"submit\" class=\"btn btn-danger\">Supprimer</button>
                    </form>
                </div>
            </div>
        {% endfor %}
    </div>
</div>
{% endblock %}
", "quotes/index.html.twig", "C:\\Users\\Utilisateur\\Desktop\\Projets\\Relax&Co\\Back\\templates\\quotes\\index.html.twig");
    }
}
