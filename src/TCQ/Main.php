<?php
namespace TCQ;

use pocketmine\plugin\PluginBase;
use pocketmine\event\Listener;
use pocketmine\event\player\PlayerInteractEvent;
use pocketmine\item\Item;
use pocketmine\Player;
use pocketmine\Server;
use pocketmine\utils\Config;

class Main extends PluginBase implements Listener{

public function onEnable(){
	$this->getServer()->getPluginManager()->registerEvents($this,$this);
	if(!file_exists($this->getDataFolder())){
	@mkdir($this->getDataFolder(), 0744, true);
}
		$this->saveDefaultConfig();
		$this->reloadConfig();
		$this->l = $this->getConfig()->get("Use_language");
		$this->b = $this->getConfig()->get("Cooking_block");
		if($this->l == "jpn"){
			$this->getLogger()->info("§bToCookQuicklyプラグインをご利用いただき、ありがとうございます。");
			$this->getLogger()->info("§b不具合などが生じた際は、連絡をお願いします。");
			$this->getLogger()->info("§c 二次配布、改造配布は禁止です。 §6製作者gigantessbeta(みやりん)");
		}else{
			$this->getLogger()->info("§bThank you for using ToCookQuickly plugin");
			$this->getLogger()->info("§bPlease contact us when troubles occur.");
			$this->getLogger()->info("§c Secondary distribution, Modification Distribution is prohibited. §6 Producer:gigantessbeta(みやりん)");
}

	
}

public function onTap(PlayerInteractEvent $event){
	$player = $event->getPlayer();
	$bid = $event->getBlock()->getId();
	$id = $player->getInventory()->getItemInHand()->getId();
		if($player->getGamemode() == "0"){
		if($bid == "$this->b"){

			switch($id){
			case "319":
				$player->getInventory()->addItem(Item::get(320, 0, 1));
				$player->getInventory()->removeItem(Item::get(319, 0, 1));
				if($this->l == "jpn"){
					$player->sendMessage("[§eTCQ§f] §6高速調理を行いました!");
				}else{
					$player->sendMessage("[§eTCQ§f] §6Did high-speed cooking!");
				}
				break;

			case "363":
				$player->getInventory()->addItem(Item::get(364, 0, 1));
				$player->getInventory()->removeItem(Item::get(363, 0, 1));
				if($this->l == "jpn"){
					$player->sendMessage("[§eTCQ§f] §6高速調理を行いました!");
				}else{
					$player->sendMessage("[§eTCQ§f] §6Did high-speed cooking!");
				}
				break;

			case "365":
				$player->getInventory()->addItem(Item::get(366, 0, 1));
				$player->getInventory()->removeItem(Item::get(365, 0, 1));
				if($this->l == "jpn"){
					$player->sendMessage("[§eTCQ§f] §6高速調理を行いました!");
				}else{
					$player->sendMessage("[§eTCQ§f] §6Did high-speed cooking!");
				}
				break;

			case "392":
				$player->getInventory()->addItem(Item::get(393, 0, 1));
				$player->getInventory()->removeItem(Item::get(392, 0, 1));
				if($this->l == "jpn"){
					$player->sendMessage("[§eTCQ§f] §6高速調理を行いました!");
				}else{
					$player->sendMessage("[§eTCQ§f] §6Did high-speed cooking!");
				}
				break;

			case "411":
				$player->getInventory()->addItem(Item::get(412, 0, 1));
				$player->getInventory()->removeItem(Item::get(411, 0, 1));
				if($this->l == "jpn"){
					$player->sendMessage("[§eTCQ§f] §6高速調理を行いました!");
				}else{
					$player->sendMessage("[§eTCQ§f] §6Did high-speed cooking!");
				}
				break;

			case "423":
				$player->getInventory()->addItem(Item::get(424, 0, 1));
				$player->getInventory()->removeItem(Item::get(423, 0, 1));
				if($this->l == "jpn"){
					$player->sendMessage("[§eTCQ§f] §6高速調理を行いました!");
				}else{
					$player->sendMessage("[§eTCQ§f] §6Did high-speed cooking!");
				}
				break;

			case "349":
				$player->getInventory()->addItem(Item::get(350, 0, 1));
				$player->getInventory()->removeItem(Item::get(349, 0, 1));
				if($this->l == "jpn"){
					$player->sendMessage("[§eTCQ§f] §6高速調理を行いました!");
				}else{
					$player->sendMessage("[§eTCQ§f] §6Did high-speed cooking!");
				}
				break;
			}
		}
	}

}

}