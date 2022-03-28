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

/* base.html.twig */
class __TwigTemplate_59197186d652ce09ed43869f148d56c7400b735e3824e0e22498bd8e5f16b8c8 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
            'title' => [$this, 'block_title'],
            'stylesheets' => [$this, 'block_stylesheets'],
            'javascripts' => [$this, 'block_javascripts'],
            'homeActive' => [$this, 'block_homeActive'],
            'accueilActive' => [$this, 'block_accueilActive'],
            'seancesActive' => [$this, 'block_seancesActive'],
            'literatureActive' => [$this, 'block_literatureActive'],
            'quotesActive' => [$this, 'block_quotesActive'],
            'body' => [$this, 'block_body'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 1
        echo "<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"UTF-8\">
        <title>";
        // line 5
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
        <link rel=\"icon\" href=\"data:image/svg+xml,<svg xmlns=%22http://www.w3.org/2000/svg%22 viewBox=%220 0 128 128%22><text y=%221.2em%22 font-size=%2296%22>⚫️</text></svg>\">
        ";
        // line 8
        echo "        <link href=\"https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css\" rel=\"stylesheet\" integrity=\"sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3\" crossorigin=\"anonymous\">
        ";
        // line 9
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 12
        echo "
        ";
        // line 13
        $this->displayBlock('javascripts', $context, $blocks);
        // line 16
        echo "    </head>
    <body>
        <nav class=\"navbar navbar-expand-lg navbar-light bg-light\">
            <div class=\"container-fluid\">
                <a class=\"navbar-brand\" href=\"http://relaxeco.free.fr/\" target=\"_blank\" rel=\"noreferrer noopener\" onclick=\"return confirm('Être redirigé(e) vers le site ?')\">Relax & Co</a>
                <button class=\"navbar-toggler\" type=\"button\" data-bs-toggle=\"collapse\" data-bs-target=\"#navbarNav\" aria-controls=\"navbarNav\" aria-expanded=\"false\" aria-label=\"Toggle navigation\">
                <span class=\"navbar-toggler-icon\"></span>
                </button>
                <div class=\"collapse navbar-collapse\" id=\"navbarNav\">
                <ul class=\"navbar-nav\">
                    <li class=\"nav-item\">
                        <a class=\"nav-link ";
        // line 27
        $this->displayBlock('homeActive', $context, $blocks);
        echo "\" aria-current=\"page\" href=\"";
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("home");
        echo "\">Home</a>
                    </li>
                    <li class=\"nav-item\">
                        <a class=\"nav-link ";
        // line 30
        $this->displayBlock('accueilActive', $context, $blocks);
        echo "\" href=\"";
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("home_page_browse");
        echo "\">Page d'accueil</a>
                    </li>
                    <li class=\"nav-item\">
                        <a class=\"nav-link ";
        // line 33
        $this->displayBlock('seancesActive', $context, $blocks);
        echo "\" href=\"";
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("seances_browse");
        echo "\">Séances</a>
                    </li>
                    ";
        // line 38
        echo "                    <li class=\"nav-item\">
                        <a class=\"nav-link ";
        // line 39
        $this->displayBlock('literatureActive', $context, $blocks);
        echo "\" href=\"";
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("literature_browse");
        echo "\">Poésies</a>
                    </li>
                    <li class=\"nav-item\">
                        <a class=\"nav-link ";
        // line 42
        $this->displayBlock('quotesActive', $context, $blocks);
        echo "\" href=\"";
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("quotes_browse");
        echo "\">Citations</a>
                    </li>
                    ";
        // line 47
        echo "                </ul>
                </div>
            </div>
        </nav>
        <div class=\"container\" style=\"max-width: 90%\">
            <div class=\"col\">
                <div class=\"row\">
                    ";
        // line 54
        $this->displayBlock('body', $context, $blocks);
        // line 55
        echo "                </div>
            </div>
        </div>
        <script src=\"https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js\" integrity=\"sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p\" crossorigin=\"anonymous\"></script>
    </body>
</html>
";
    }

    // line 5
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        echo "Welcome!";
    }

    // line 9
    public function block_stylesheets($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 10
        echo "            ";
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('encore_entry_link_tags')->getCallable(), ["app"]), "html", null, true);
        echo "
        ";
    }

    // line 13
    public function block_javascripts($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 14
        echo "            ";
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('encore_entry_script_tags')->getCallable(), ["app"]), "html", null, true);
        echo "
        ";
    }

    // line 27
    public function block_homeActive($context, array $blocks = [])
    {
        $macros = $this->macros;
    }

    // line 30
    public function block_accueilActive($context, array $blocks = [])
    {
        $macros = $this->macros;
    }

    // line 33
    public function block_seancesActive($context, array $blocks = [])
    {
        $macros = $this->macros;
    }

    // line 39
    public function block_literatureActive($context, array $blocks = [])
    {
        $macros = $this->macros;
    }

    // line 42
    public function block_quotesActive($context, array $blocks = [])
    {
        $macros = $this->macros;
    }

    // line 54
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
    }

    public function getTemplateName()
    {
        return "base.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  201 => 54,  195 => 42,  189 => 39,  183 => 33,  177 => 30,  171 => 27,  164 => 14,  160 => 13,  153 => 10,  149 => 9,  142 => 5,  132 => 55,  130 => 54,  121 => 47,  114 => 42,  106 => 39,  103 => 38,  96 => 33,  88 => 30,  80 => 27,  67 => 16,  65 => 13,  62 => 12,  60 => 9,  57 => 8,  52 => 5,  46 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "base.html.twig", "C:\\Users\\Utilisateur\\Desktop\\Projets\\Relax&Co\\Back\\templates\\base.html.twig");
    }
}
