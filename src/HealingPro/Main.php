<?php
# For plugin support contact FalsePotted#3211
# This plugin supports color code and everything else! :D
namespace HealingPro;

use pocketmine\command\Command;
use pocketmine\command\CommandSender;
use pocketmine\event\Listener;
use pocketmine\PLayer;
use pocketmine\plugin\PluginBase;

class Main extends PLuginBase implements Listener{

    public function onEnable(): void{
        $this->getServer()->getPluginManager()->registerEvents($this, $this);
    }

    public function onCommand(CommandSender $sender, Command $command, string $label, array $args): bool{
        switch(strtolower($label)){
            case 'heal':
               if(!$sender instanceof Player) Return false;
               # Checking if the player has permission to use /heal
               if($sender->hasPermission('cmd.heal')){
                   # Default health!
                   # DO NOT CHANGE!
                   $sender->setHealth(20);
                   $sender->sendMessage("You have been healed!");
       }else{
           # No permission text
           # This is configurable, change it to your needs.
                $sender->sendMessage("No permission!");

       }
       break;
        }
        return true;
    }
}