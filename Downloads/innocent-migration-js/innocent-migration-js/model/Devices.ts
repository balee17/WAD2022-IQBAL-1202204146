import { CategoryType } from './Products';

export type DevicesType = {
  id: number;
  room_id: number;
  room_type: CategoryType;
  name: string;
  image_id: number;
  used_status: number;
  start_at: string;
};
