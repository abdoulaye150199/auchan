<?php
namespace Src\entite;

enum Statut: string
{
    case Paye = "paye";
    case IMPAYE = "impaye";
  
}

enum Type: string
{
    case Client = "client";
    case Vendeur = "vendeur";
}
