<?php

namespace LucasJs\Minage;

use pocketmine\event\Listener;
use pocketmine\{Server, Player};
use pocketmine\command\{Command, CommandSender};
use pocketmine\plugin\PluginBase;

class Main extends PluginBase implements Listener
{
    public function onEnable()
    {
        $this->getLogger()->info("Plugin en marche ");
        $this->getserver()->getPluginManager()->registerEvents($this,$this);
}


    


    public function onCommand(CommandSender $sender, Command $command, string $label, array $args): bool
    {
        if ($command->getName() === "minage") {
            if ($sender instanceof Player) {
                $spawn = Server::getInstance()->getLevelByName("Minage4");
                $sender->teleport($spawn);
                $sender->sendMessage("Tu as bien été téléporté au minage  !");
            }
        }
        return true;
    }
}