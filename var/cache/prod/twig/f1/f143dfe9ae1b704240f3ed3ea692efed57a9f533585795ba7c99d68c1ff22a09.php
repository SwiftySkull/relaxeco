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

/* quotes/read.html.twig */
class __TwigTemplate_5383053956bdfd28eb526e7486feb1abdc0044821e509852b881cd95ae3a5900 extends Template
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
        $this->parent = $this->loadTemplate("base.html.twig", "quotes/read.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        echo "Hello QuotesController!";
    }

    // line 5
    public function block_quotesActive($context, array $blocks = [])
    {
        $macros = $this->macros;
        echo "active";
    }

    // line 7
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 8
        echo "<style>
    .example-wrapper { margin: 1em auto; max-width: 90%; width: 95%; font: 18px/1.5 sans-serif; }
    .example-wrapper code { background: #F5F5F5; padding: 2px 6px; }

    .content-block div {
        margin: 2rem 0;
    }

    .content-block div p {
        margin: 0;
        line-height: 2rem
    }
</style>

<div class=\"example-wrapper\">
    <h1>Présentation de la citation</h1>
    <a href=\"";
        // line 24
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("quotes_browse");
        echo "\" class=\"btn btn-primary\">Retour à la liste des poésies</a>
    ";
        // line 25
        if ( !(twig_get_attribute($this->env, $this->source, ($context["quote"] ?? null), "displayable", [], "any", false, false, false, 25) === true)) {
            // line 26
            echo "        <p class=\"error-message\" style=\"color: red; margin: 3rem 0; text-align: center\">Il manque des informations pour pouvoir afficher la news sur le site !</p>
        <ul>
            ";
            // line 28
            echo (((twig_get_attribute($this->env, $this->source, ($context["quote"] ?? null), "author", [], "any", false, false, false, 28) == null)) ? ("<li>Manque l'autrice/auteur</li>") : (""));
            echo "
            ";
            // line 29
            echo (((twig_get_attribute($this->env, $this->source, ($context["quote"] ?? null), "content", [], "any", false, false, false, 29) == null)) ? ("<li>Manque le contenu</li>") : (""));
            echo "
        </ul>
    ";
        }
        // line 32
        echo "    <div style=\"display: flex; justify-content: center; margin: 2rem 0\">
        <form action=\"";
        // line 33
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("quotes_edit", ["id" => twig_get_attribute($this->env, $this->source, ($context["quote"] ?? null), "id", [], "any", false, false, false, 33)]), "html", null, true);
        echo "\" style=\"margin-right: 1rem\" method=\"POST\">
            <input type=\"hidden\" name=\"token\" value=\"";
        // line 34
        echo twig_escape_filter($this->env, $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderCsrfToken("add-edit-item"), "html", null, true);
        echo "\"/>
            <button class=\"btn btn-warning\">Modifier</button>
        </form>
        <form action=\"";
        // line 37
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("quotes_delete", ["id" => twig_get_attribute($this->env, $this->source, ($context["quote"] ?? null), "id", [], "any", false, false, false, 37)]), "html", null, true);
        echo "\" onsubmit=\"return confirm('Supprimer Citation/Poésie ";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["quote"] ?? null), "author", [], "any", false, false, false, 37), "html", null, true);
        echo " ?')\" method=\"POST\">
            <input type=\"hidden\" name=\"token\" value=\"";
        // line 38
        echo twig_escape_filter($this->env, $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderCsrfToken("delete-item"), "html", null, true);
        echo "\"/>
            <button type=\"submit\" class=\"btn btn-danger\">Supprimer</button>
        </form>
    </div>
    <h2 style=\"margin: 2rem 0\">";
        // line 42
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["quote"] ?? null), "author", [], "any", false, false, false, 42), "html", null, true);
        echo "</h2>
    <div class=\"content-block\" style=\"font-size: 1.3rem; line-height: 2rem; margin-bottom: 1.5rem;\">";
        // line 43
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["quote"] ?? null), "content", [], "any", false, false, false, 43), "html", null, true);
        echo "</div>
    <div style=\"display: flex; justify-content: center; margin: 2rem 0\">
        <form action=\"";
        // line 45
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("quotes_edit", ["id" => twig_get_attribute($this->env, $this->source, ($context["quote"] ?? null), "id", [], "any", false, false, false, 45)]), "html", null, true);
        echo "\" style=\"margin-right: 1rem\" method=\"POST\">
            <input type=\"hidden\" name=\"token\" value=\"";
        // line 46
        echo twig_escape_filter($this->env, $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderCsrfToken("add-edit-item"), "html", null, true);
        echo "\"/>
            <button class=\"btn btn-warning\">Modifier</button>
        </form>
        <form action=\"";
        // line 49
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("quotes_delete", ["id" => twig_get_attribute($this->env, $this->source, ($context["quote"] ?? null), "id", [], "any", false, false, false, 49)]), "html", null, true);
        echo "\" onsubmit=\"return confirm('Supprimer Citation de ";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["quote"] ?? null), "author", [], "any", false, false, false, 49), "html", null, true);
        echo " ?')\" method=\"POST\">
            <input type=\"hidden\" name=\"token\" value=\"";
        // line 50
        echo twig_escape_filter($this->env, $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderCsrfToken("delete-item"), "html", null, true);
        echo "\"/>
            <button type=\"submit\" class=\"btn btn-danger\">Supprimer</button>
        </form>
    </div>
    <a href=\"";
        // line 54
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("quotes_browse");
        echo "\" class=\"btn btn-primary\">Retour à la liste des poésies</a>
</div>
";
    }

    public function getTemplateName()
    {
        return "quotes/read.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  162 => 54,  155 => 50,  149 => 49,  143 => 46,  139 => 45,  134 => 43,  130 => 42,  123 => 38,  117 => 37,  111 => 34,  107 => 33,  104 => 32,  98 => 29,  94 => 28,  90 => 26,  88 => 25,  84 => 24,  66 => 8,  62 => 7,  55 => 5,  48 => 3,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "quotes/read.html.twig", "C:\\Users\\Utilisateur\\Desktop\\Projets\\Relax&Co\\Back\\templates\\quotes\\read.html.twig");
    }
}
