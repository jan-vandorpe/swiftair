<?php

/* SCRUMSwiftairBundle::base.html.twig */
class __TwigTemplate_17f5868355118214cb1f8053ba5c6f14da50af3bb89bc3276904d47f9fd07835 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'stylesheets' => array($this, 'block_stylesheets'),
            'scripts' => array($this, 'block_scripts'),
            'body' => array($this, 'block_body'),
            'javascripts' => array($this, 'block_javascripts'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "<!DOCTYPE html>
<html>
    <head>
        <meta http-equiv=\"Content-Type\" content=\"text/html; charset=utf-8\" />
        <meta http-equiv=\"CACHE-CONTROL\" content=\"NO-CACHE\" />
        
        <title>";
        // line 7
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
        
        ";
        // line 9
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 14
        echo "        
        ";
        // line 15
        $this->displayBlock('scripts', $context, $blocks);
        // line 29
        echo "        
        <style>
\t\t#vluchtFouten{display:none;}
\t\t
\t\t</style>
        
    </head>
    <body>
        ";
        // line 37
        $this->displayBlock('body', $context, $blocks);
        // line 201
        echo "        ";
        $this->displayBlock('javascripts', $context, $blocks);
        // line 202
        echo "    </body>
</html>
";
    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        echo "Swiftair";
    }

    // line 9
    public function block_stylesheets($context, array $blocks = array())
    {
        echo "   
        <link rel='stylesheet' type=\"text/css\"  href=\"#\"/>
        <link rel='stylesheet' type='text/css' href=";
        // line 11
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/scrumswiftair/js/jquery-ui-1.11.2.custom/jquery-ui.min.css"), "html", null, true);
        echo " />
        
        ";
    }

    // line 15
    public function block_scripts($context, array $blocks = array())
    {
        // line 16
        echo "
        <script type=\"text/javascript\" src=\"";
        // line 17
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/scrumswiftair/js/jquery-ui-1.11.2.custom/external/jquery/jquery.js"), "html", null, true);
        echo "\"></script>
        <script type=\"text/javascript\" src=\"";
        // line 18
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/scrumswiftair/js/jquery-ui-1.11.2.custom/jquery-ui.min.js"), "html", null, true);
        echo "\"></script>
        <script type=\"text/javascript\" src=\"";
        // line 19
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/scrumswiftair/js/jquery-ui-1.11.2.custom/jquery-validation-1.13.1/dist/jquery.validate.min.js"), "html", null, true);
        echo "\"> </script>
        <script type=\"text/javascript\" src=\"";
        // line 20
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/scrumswiftair/js/jquery-ui-1.11.2.custom/jquery-validation-1.13.1/dist/additional-methods.min.js"), "html", null, true);
        echo "\"></script>
        <!-- <script type=\"text/javascript\" src=\"";
        // line 21
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/scrumswiftair/js/jquery-ui-1.11.2.custom/slidesjs-3/jquery.slides.min.js"), "html", null, true);
        echo "\"></script>
        <!-- <script type=\"text/javascript\" src=\"";
        // line 22
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/scrumswiftair/js/jquery-ui-1.11.2.custom/jquery-validation-1.13.1/dist/localization/jquery.ui.datepicker-nl-BE.js"), "html", null, true);
        echo "\"></script> -->
\t\t
\t\t<script type=\"text/javascript\" src=\"";
        // line 24
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/scrumswiftair/js/airline.js"), "html", null, true);
        echo "\"></script>
\t

        
        ";
    }

    // line 37
    public function block_body($context, array $blocks = array())
    {
        // line 38
        echo "\t\t<div id=\"container\">
  <div id=\"kop\">
    <!-- <img src=\"";
        // line 40
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/scrumswiftair/img/2008-vliegtuigje met staartklein.gif"), "html", null, true);
        echo "\" id=\"koptitel\" alt=\"Swiftair\"  /></div> -->
  <div id=\"buik\">
    <div id=\"links\">&nbsp;</div>
    <div id=\"tester\" style=\"display:none\">tester element</div>
    <div id=\"midden\">
        <div id=\"inhoud\">
<!-- start UL voor tabs -->
          <ul>
              <li><a href=\"#welcome\">Welkom</a></li>
              <li><a href=\"#vlucht\">Vlucht Boeken</a></li>
              <li><a href=\"#checkin\">Check-in</a></li> 
          </ul>
 <!-- einde UL voor tabs -->      
 \t\t<div id=\"welcome\">
          <h1>Welkom</h1>
          <div class='foutBox' id='vluchtFouten'><h2>Fouten</h2><ul></ul></div>
          <p> Op onze website kan u een vlucht boeken naar uw favoriete bestemming.  </p>
          <p> Wanneer u reeds een vlucht boekte, kan u via de online check-in vanaf drie dagen voor vertrek online inchecken. </p>
          <br>
          <p> Wij wensen u alvast een prettige reis </p>
        </div>   
        <div id=\"vlucht\">
          <h1>Vlucht boeken</h1>
          <div class='foutBox' id='vluchtFouten'><h2>Fouten</h2><ul></ul></div>
          <form name=\"frmVlucht\" id =\"frmVlucht\" action=\"reflect_data.php\" method=\"get\">
            <p>
              <label>Land van vertrek:</label>
              <select name=\"countries\" id=\"countries\">
              <option> </option>
              <option> BE Brussel </option>
              <option> BE Oostende </option>
              <option> BE Charleroi </option>
              <option> NL Amsterdam </option>
              <option> NL Eindhoven </option>
              </select>
            </p>
            <!-- <p>
              <label>Luchthaven</label>
              <select name=\"airports\" id=\"airports\" >
              
              </select>
            </p> --> 
            <p>
              <label>naar (luchthavencode)</label>
              <select type=\"text\" name=\"destinationairport\" id=\"destinationairport\" >
         
              <option>  </option>
              <option> Spanje </option>
              <option> Frankrijk </option>
              <option> Een mooi eilandje </option>
              <option> Duitsland </option>
              <option> Noorwegen </option>
              </select>
            </p>
            <p>
              
               <label>heen (datum)</label>
              <input  class=\"datum\" type=\"text\" name=\"vertrekdatum\" id=\"vertrekdatum\" /><label class=\"inline\" > retour<input type=\"checkbox\" name=\"retour\" id=\"retour\" /></label>
             
            </p>
            <p>
              <label id=\"terugdatumlabel\">terug (datum)</label>
              <input class=\"datum\" type=\"text\" name=\"terugdatum\" id=\"terugdatum\" />
            </p>
            <p>
              <label>ticket type</label>
              goedkoopst
              <input type=\"radio\" name=\"tickettype\" id=\"ticketgoedkoop\" value=\"goedkoop\" />
              flexibel
              <input type=\"radio\" name=\"tickettype\" id=\"ticketflexibel\" value=\"flexibel\" />
            </p>
            <p>
              <label>aantal</label>
              volwassenen
              <select name=\"volwassenen\" id=\"volwassenen\" >
                <option>0</option>
                <option>1</option>
                <option>2</option>
                <option>3</option>
                <option>4</option>
                <option>5</option>
                <option>6</option>
                <option>7</option>
                <option>8</option>
                <option>9</option>
                <option>9+</option>
              </select>
              kinderen
              <select name=\"kinderen\" id=\"kinderen\" >
                <option>0</option>
                <option>1</option>
                <option>2</option>
                <option>3</option>
                <option>4</option>
                <option>5</option>
                <option>6</option>
                <option>7</option>
                <option>8</option>
                <option>9</option>
              </select>
              babies
              <select name=\"babies\" id=\"babies\" >
                <option>0</option>
                <option>1</option>
                <option>2</option>
                <option>3</option>
                <option>4</option>
                <option>5</option>
                <option>6</option>
                <option>7</option>
                <option>8</option>
                <option>9</option>
              </select>
            </p>
            <p>
              <input type=\"submit\" value=\"ga verder\" />
            </p>
          </form>
        </div>
        <div id=\"checkin\">
          <div class=\"foutBox\" id=\"checkinFouten\"><h2>Fouten</h2><ul></ul></div>
            <h1>Online check-in</h1>
          <p>Welkom op Sardine Airways online check-in systeem.</p>
          <p>U kunt vanaf 3 dagen tot ten laatste 4 uur v&oacute;&oacute;r uw vlucht inchecken. Eenmaal ingecheckt kunt u ten allen tijde uw boarding paas (opnieuw) uitprinten tot 40 minuten  v&oacute;&oacute;r vertrektijd.</p>
          <p>Om online in te checken:</p>
          <ul>
            <li>vul eerst uw reservatienummer in <a href=\"#\" id=\"opener\">(hier te vinden)</a></li>
            <li>vul het kredietkaartnummer in waarmee de boeking gebeurde</li>
          </ul>
          <div id=\"dialog\" title=\"Boekingsreferentie\">
              <p>Uw boekingsreferentie vind u op uw electronisch ticket zoals hieronder aangegeven</p>
              <!-- <img src=\"images/boeking.png\"></img>-->
          </div>
          <form name=\"frmCheckin\" id =\"frmCheckin\" action=\"reflect_data.php\" method=\"get\">
            <p>
              <label>boekingreferentie</label>
              <input type=\"text\" name=\"boekingreferentie\" id=\"boekingreferentie\" />
            </p>
            <p>
              <label>kredietkaartnummer</label>
              <input type=\"text\" name=\"kredietkaartnummer\" id=\"kredietkaartnummer\" />
            </p>
            <p>
              <label>familienaam</label>
              <input type=\"text\" name=\"familienaam\" id=\"familienaam\" />
            </p>
            <p>
              <input type=\"submit\" value=\"checkin\" />
            </p>
          </form>
        </div>
       </div>
      <!--einde inhoud-->
    </div>
    <!--einde midden-->
    <div id=\"rechts\">&nbsp;</div>
  </div>
  <!--einde buik-->
  <div id=\"voet\"> &copy; Swiftair | About | Contact </div>
</div>
\t\t";
    }

    // line 201
    public function block_javascripts($context, array $blocks = array())
    {
    }

    public function getTemplateName()
    {
        return "SCRUMSwiftairBundle::base.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  296 => 201,  131 => 40,  127 => 38,  124 => 37,  115 => 24,  110 => 22,  106 => 21,  102 => 20,  98 => 19,  94 => 18,  90 => 17,  87 => 16,  84 => 15,  77 => 11,  71 => 9,  65 => 7,  59 => 202,  56 => 201,  54 => 37,  44 => 29,  42 => 15,  39 => 14,  37 => 9,  32 => 7,  24 => 1,);
    }
}
